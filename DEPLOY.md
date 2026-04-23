# Deploy handleiding — rwwbouw.nl

Target: **Hostinger shared hosting**, webroot `/home/u920114272/domains/rwwbouw.nl/public_html`, PHP 8.2, Apache.

## TL;DR

Push naar `main` → GitHub Actions SSH't naar de server → `git pull --ff-only` op de webroot → PHP syntax check → smoke test op homepage. Zie `.github/workflows/deploy.yml`.

Live url: https://www.rwwbouw.nl/

## Eenmalige setup — GitHub Secrets

De workflow heeft 5 secrets nodig. Voeg ze toe via
`Settings → Secrets and variables → Actions → New repository secret`:

| Naam | Waarde |
|------|--------|
| `DEPLOY_HOST` | `82.25.102.35` |
| `DEPLOY_PORT` | `65002` |
| `DEPLOY_USER` | `u920114272` |
| `DEPLOY_PATH` | `/home/u920114272/domains/rwwbouw.nl/public_html` |
| `DEPLOY_SSH_KEY` | De ed25519 private key (zie hieronder) |
| `DEPLOY_KNOWN_HOSTS` | `[82.25.102.35]:65002 ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIJwF60tI7nJgsUh42sawp1wqjpPkQjsUd1b7dia7C2c6` |

De dedicated deploy pubkey staat al in `~/.ssh/authorized_keys` op de server
(comment: `github-actions-deploy@rwwbouw.nl`). De bijbehorende private key
is éénmalig in de chat getoond bij het opzetten — sla hem op in een
password manager en plak hem in `DEPLOY_SSH_KEY`.

Kwijt? Een nieuwe maken:

```bash
# Op je eigen machine
ssh-keygen -t ed25519 -C "github-actions-deploy@rwwbouw.nl" -f deploy_key -N ""

# Pubkey naar server (vervangt de oude entry met dezelfde comment)
cat deploy_key.pub | ssh -p 65002 u920114272@82.25.102.35 '
  grep -v "github-actions-deploy@rwwbouw.nl" ~/.ssh/authorized_keys > ~/.ssh/authorized_keys.new || true
  cat >> ~/.ssh/authorized_keys.new
  mv ~/.ssh/authorized_keys.new ~/.ssh/authorized_keys
  chmod 600 ~/.ssh/authorized_keys
'

# Content van `deploy_key` → GitHub secret DEPLOY_SSH_KEY. Daarna lokaal verwijderen.
rm deploy_key deploy_key.pub
```

## Hoe de pipeline werkt

1. Push naar `main` (of handmatig via **Actions → Deploy naar rwwbouw.nl → Run workflow**).
2. GitHub Actions runner schrijft `DEPLOY_SSH_KEY` en `DEPLOY_KNOWN_HOSTS` naar `~/.ssh/`.
3. SSH naar de server, `cd` naar de webroot.
4. `git fetch origin main` + `git merge --ff-only origin/main`.
5. PHP `-l` (lint) op elk veranderd `.php` bestand + `index.php`, `form-handler.php`, `router.php`.
6. `curl` op https://www.rwwbouw.nl/ — moet HTTP 200 geven.

Eén deploy tegelijk (`concurrency: deploy-production`). Timeout: 5 minuten.

## Het `data/` probleem — belangrijk om te weten

Het CMS schrijft direct naar tracked JSON-bestanden in `data/` (site.json,
posts.json, pages.json, enz.). Zodra iemand via het beheer iets wijzigt,
divergeert de live `data/` van git.

De workflow gebruikt **`git merge --ff-only`**, wat alléén veilig is zolang een
push niet dezelfde `data/*.json` aanraakt die live is aangepast. Als dat wél
gebeurt:

- De Actions job faalt met een duidelijke foutmelding.
- Niemand deploys tot je handmatig conflict oplost via SSH.
- De site blijft draaien op de vorige versie (fail-safe).

Handmatig oplossen:

```bash
ssh -p 65002 u920114272@82.25.102.35
cd domains/rwwbouw.nl/public_html
git status                          # zie welke bestanden botsen
git stash push -- data/foo.json     # parkeer live content
git pull --ff-only origin main
git stash pop                       # merge live content terug
# Los conflict-markers in JSON handmatig op, daarna:
git checkout -- data/foo.json       # of commit de merge
```

Aanbeveling op termijn: haal CMS-schrijfbare bestanden (`data/site.json`,
`data/posts.json`, `data/pages.json`, `data/users.json`, `data/content.json`,
`data/legal.json`, `data/navigation.json`, `data/forms.json`,
`data/media.json`, `data/redirects.json`) uit git-tracking. Houd in git alleen
`site.template.json` als default. Eerste deploy naar een nieuwe omgeving
kopieert dan template → data.

## Handmatig deployen (als CI down is)

```bash
ssh -p 65002 u920114272@82.25.102.35
cd domains/rwwbouw.nl/public_html
git fetch origin main
git merge --ff-only origin/main
```

## Rollback

```bash
ssh -p 65002 u920114272@82.25.102.35
cd domains/rwwbouw.nl/public_html
git log --oneline -10                    # zoek de laatste goede commit
git reset --hard <sha>                   # !! vernietigt lokale mods in tracked files
# Veiliger: revert op GitHub en push:
#   git revert <bad-sha> && git push origin main
# Dan gaat de pipeline vanzelf terug naar de vorige goede staat.
```

Let op: `git reset --hard` op de server overschrijft live `data/site.json`
als die lokaal is bewerkt. Meestal wil je een **revert-commit** pushen in plaats
van een hard reset op de server.

## Debuggen

**Workflow faalt op SSH stap** → check `DEPLOY_SSH_KEY` en `DEPLOY_KNOWN_HOSTS`
secrets. Test vanaf je eigen machine:

```bash
ssh -p 65002 u920114272@82.25.102.35 'echo ok'
```

**Workflow faalt op merge** → zie "Het `data/` probleem" hierboven.

**Smoke test faalt (non-200)** → check server error log:

```bash
ssh -p 65002 u920114272@82.25.102.35 'tail -100 domains/rwwbouw.nl/public_html/data/audit.log'
# En de PHP error log in het Hostinger panel onder "Websites → Geavanceerd → PHP errors".
```

## Contact

Nick Aldewereld — info@easeo.nl — +31 6 2501 5434
