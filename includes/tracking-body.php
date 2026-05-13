<?php
/**
 * EASEO CMS — Tracking scripts (body section, GTM noscript)
 *
 * GTM noscript laadt altijd (Consent Mode v2 regelt wat de tags mogen).
 * Custom body code blijft achter has_cookie_consent().
 */
$gtm_id = site('tracking.gtm_id');
if ($gtm_id): ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= e($gtm_id) ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php endif;

if (has_cookie_consent()):
  $custom_body = site('tracking.custom_body_code');
  if ($custom_body):
    echo "\n" . $custom_body . "\n";
  endif;
endif;
?>
