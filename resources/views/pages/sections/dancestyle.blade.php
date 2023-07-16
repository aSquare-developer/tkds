<section id="dancestyle" class="text-center pt-5">

  <div class="container">
    <div class="intro">
        <p class="text-center">{{ $header->about_first }}</p>
        <p class="text-center">{{ $header->about_second }}</p>
    </div>
  </div>

  <!-- Swiper -->
{{--  <div class="swiper mySwiper">--}}
{{--    <div class="swiper-wrapper">--}}

{{--      @foreach($dancestyles as $dancestyle)--}}

{{--        <div class="swiper-slide">--}}
{{--          <a href="#" class="glider-carousel-link" data-toggle="modal" data-target=".{{ $dancestyle->slug }}-modal-lg">--}}
{{--              <img src="/swiper/{{ $dancestyle->slug }}.jpeg" class="card-img-top" alt="{{ $dancestyle->slug }}" />--}}
{{--          </a>--}}
{{--        </div>--}}

{{--      @endforeach--}}

{{--    </div>--}}
{{--  </div>--}}

  <!-- Modal for Dancehall-->
  @foreach($dancestyles as $dancestyle)

  <div class="modal fade {{ $dancestyle->slug }}-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="{{ $dancestyle->slug }}ModalTitle">{{ $dancestyle->name }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>{{ $dancestyle->dancestyle_description }}</p>
          <p>{{ $dancestyle->description }}</p>

              @if(!($dancestyle->youtube_link == NULL))
                <div class="embed-responsive embed-responsive-16by9">
                  {!! $dancestyle->youtube_link !!}
                </div>
            @endif
        </div>
      </div>
    </div>
  </div>

  @endforeach

</section>
