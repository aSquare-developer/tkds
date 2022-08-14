<section id="dancestyle" class="text-center pt-5">

  <div class="container">
    <div class="intro">
        <h2 class="text-center">TKDS Dancestyles</h2>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>

  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      @foreach($dancestyles as $dancestyle)

        <div class="swiper-slide">
          <a href="#" class="glider-carousel-link" data-toggle="modal" data-target=".{{ $dancestyle->slug }}-modal-lg">
              <img src="/swiper/{{ $dancestyle->slug }}.jpeg" class="card-img-top" alt="{{ $dancestyle->slug }}" />
          </a>
        </div>

      @endforeach

    </div>
  </div>

  <!-- Modal for Dancehall-->
  @foreach($dancestyles as $dancestyle)

  <div class="modal fade {{ $dancestyle->slug }}-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
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
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="{{ $dancestyle->youtube_link }}" title="{{ $dancestyle->name }}" style="border:0;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endforeach

</section>
