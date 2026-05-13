<?php
/**
 * EASEO CMS — AVG/GDPR Cookie Consent Banner
 * Cookie naam: rww_cookies (gelezen door PHP has_cookie_consent() en Consent Mode v2 JS)
 */
if (!isset($_COOKIE['rww_cookies'])): ?>
<div id="cookie-banner" class="fixed bottom-0 left-0 right-0 text-white p-4 z-[9999] shadow-lg transform translate-y-full transition-transform duration-300" style="background-color:#1C1917;">
    <div class="max-w-6xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="text-sm flex-1">
            Wij gebruiken cookies om uw ervaring te verbeteren. Door deze site te gebruiken gaat u akkoord met ons
            <a href="/cookiebeleid" class="underline hover:text-primary">cookiebeleid</a>.
        </div>
        <div class="flex gap-3 shrink-0">
            <button onclick="easeoDeclineCookies()" class="px-4 py-2 text-sm border border-gray-500 rounded hover:bg-gray-700 transition-colors">
                Weigeren
            </button>
            <button onclick="easeoAcceptCookies()" class="px-4 py-2 text-sm bg-primary text-white border border-primary rounded hover:opacity-90 transition-colors">
                Accepteren
            </button>
        </div>
    </div>
</div>
<script>
(function() {
    var banner = document.getElementById('cookie-banner');
    setTimeout(function() { banner.classList.remove('translate-y-full'); }, 100);
})();

function setRwwCookie(value) {
    var d = new Date();
    d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));
    document.cookie = 'rww_cookies=' + value + ';expires=' + d.toUTCString() + ';path=/;SameSite=Lax';
}

function easeoAcceptCookies() {
    setRwwCookie('accepted');
    if (typeof gtag === 'function') {
        gtag('consent', 'update', {
            'ad_storage': 'granted',
            'ad_user_data': 'granted',
            'ad_personalization': 'granted',
            'analytics_storage': 'granted'
        });
    }
    // Reload zodat niet-Google scripts (Facebook Pixel, custom code) ook laden
    window.location.reload();
}

function easeoDeclineCookies() {
    setRwwCookie('declined');
    if (typeof gtag === 'function') {
        gtag('consent', 'update', {
            'ad_storage': 'denied',
            'ad_user_data': 'denied',
            'ad_personalization': 'denied',
            'analytics_storage': 'denied'
        });
    }
    document.getElementById('cookie-banner').remove();
}
</script>
<?php endif; ?>
