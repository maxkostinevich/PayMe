<!-- ========== FOOTER ========== -->
<footer class="container text-center space-2">
    <!-- Logo -->
    <a class="d-inline-flex align-items-center mb-3" href="/" aria-label="PayMe">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="36px"
             height="36px" viewBox="0 0 36 36" xml:space="preserve" style="margin-bottom: 0;">
        <path fill="#377dff"
              d="M18,0H29.38A6.62,6.62,0,0,1,36,6.62V18A18,18,0,0,1,18,36H18A18,18,0,0,1,0,18V18A18,18,0,0,1,18,0Z"/>
            <path fill="#fff"
                  d="M679,395.44a17.22,17.22,0,0,1-6-1.34v-4.54a20.76,20.76,0,0,0,3.58,1.35,12.85,12.85,0,0,0,3.4.54,4.11,4.11,0,0,0,1.77-.28,1,1,0,0,0,.56-.94.93.93,0,0,0-.4-.76,6.14,6.14,0,0,0-1.35-.71c-.63-.27-1.48-.59-2.56-1a11.94,11.94,0,0,1-2.91-1.44,5,5,0,0,1-1.61-1.79,5.38,5.38,0,0,1-.51-2.47,4.37,4.37,0,0,1,1.51-3.53A8.15,8.15,0,0,1,679,377v-2h3v1.86a17.92,17.92,0,0,1,5.81,1.34l-1.72,3.92a14.14,14.14,0,0,0-5.47-1.29,3.55,3.55,0,0,0-1.63.27.86.86,0,0,0-.47.79,1,1,0,0,0,.34.75,5.45,5.45,0,0,0,1.18.66q.84.36,2.34.84a11.29,11.29,0,0,1,4.34,2.32,4.48,4.48,0,0,1,1.32,3.35,4.89,4.89,0,0,1-1.54,3.75,7.75,7.75,0,0,1-4.5,1.79V398h-3Z"
                  transform="translate(-662 -369)"/>
      </svg>
        <span class="brand brand-primary">PayMe</span>
    </a>
    <!-- End Logo -->

    <!-- List -->
    <ul class="list-inline list-group-flush list-group-borderless">
        <li class="list-inline-item px-2">
            <a class="list-group-item-action" href="https://laravel101.com" target="_blank">Support</a>
        </li>
        <li class="list-inline-item px-2">
            <a class="list-group-item-action" href="{{ route('page.privacy') }}">Privacy</a>
        </li>
        <li class="list-inline-item px-2">
            <a class="list-group-item-action" href="{{ route('page.terms') }}">Terms</a>
        </li>
    </ul>
    <!-- End List -->

    <!-- Copyright -->
    <p class="small text-muted mb-3">⚡️ A project by <a href="https://maxkostinevich.com" target="_blank">Max Kostinevich</a> &amp; <a href="https://laravel101.com" target="_blank">Laravel 101</a>
        ⚡️</p>
    <p class="small text-muted mb-0">&copy; {{ date('Y') }} <a href="/">{{ config('app.name', 'Laravel') }}</a> &mdash; All rights reserved.</p>
    <!-- End Copyright -->
</footer>
<!-- ========== END FOOTER ========== -->