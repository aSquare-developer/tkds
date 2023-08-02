<section id="features" class="pt-5">
    <div class="container">
        <div class="row featurette">
            <div class="col-md-7 d-flex align-items-center">
                <p class="lead text-center">
                    {{ $header->about_first }}
                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" alt="" src="{{ URL::asset('/img/a.jpeg') }}">
            </div>
        </div>
        <div class="row featurette">
            <div class="col-md-7 order-md-2 d-flex align-items-center">
                <p class="lead text-center">
                    {{ $header->about_second }}</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" alt="" src="{{ URL::asset('/img/b.jpeg') }}">
            </div>
        </div>
    </div>
</section>
