@if(config('app.demo_mode'))
<!-- ========== DEMO NOTIFICATION ========== -->
<div class="alert alert-warning text-center" role="alert">
    <div class="alert-heading mb-2 font-weight-bold">🔥 DEMO MODE 🔥</div>
    <div class="small">
        Real payments are <b>disabled</b>. Use <a href="https://stripe.com/docs/testing#cards" target="_blank">test payments cards</a> to test payments.<br>
        Learn how to develop <b>real-world SaaS apps</b> and get PayMe's full source code at <a href="https://laravel101.com/book?utm_source=demo" target="_blank" class="alert-link"><u>laravel101.com/book</u></a>.
    </div>
</div>
<!-- ========== END DEMO NOTIFICATION ========== -->
@endif