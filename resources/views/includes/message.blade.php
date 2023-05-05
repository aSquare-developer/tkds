@if (\Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ session()->get('success') }}
</div>
@endif

@if (\Session::has('delete'))
<div class="alert alert-danger" role="alert">
    {{ session()->get('delete') }}
</div>
@endif

@if ($errors->has('g-recaptcha-response'))
<div class="alert alert-danger" role="alert">
    reCaptcha on nõutav väli
</div>
@endif
