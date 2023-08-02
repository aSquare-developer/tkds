<section id="dancestyle" class="text-center pt-5">

  <div class="container">
    <div class="intro">
        <p class="text-center">{{ $header->about_first }}</p>
        <p class="text-center">{{ $header->about_second }}</p>
    </div>

      <h1>Meie meeskond</h1>

  </div>

  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      @foreach($teachers as $teacher)
        <div class="swiper-slide">
          <a href="#" class="glider-carousel-link" data-toggle="modal" data-target=".{{ Str::slug($teacher->fullname) }}-modal-lg">
              <img src="{{ Storage::url($teacher->image_url) }}" class="card-img-top" alt="{{ Str::slug($teacher->fullname) }}" />
          </a>
        </div>
      @endforeach

    </div>
  </div>

  <!-- Modal for Dancehall-->
  @foreach($teachers as $teacher)

  <div class="modal fade {{ Str::slug($teacher->fullname) }}-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="{{ Str::slug($teacher->fullname) }}ModalTitle">
              {{ $teacher->fullname }}
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>{{ $teacher->description }}</p>
            <p>
                {{ $teacher->fullname }} õppetab:
                @foreach($teacher->danceStyles as $danceStyle)
                    <span class="badge badge-pill badge-primary">
                        {{ $danceStyle->name }}
                    </span>
                @endforeach

                @foreach($teacher->danceStyles as $danceStyle)
                    <p>{{ $danceStyle->description }}</p>
                @endforeach
            </p>
            <div class="flex justify-center items-center gap-2">
                @if(isset($teacher->facebook_link))
                    <a href="{{ $teacher->facebook_link }}" target="_blank">
                        <img src="{{ URL::asset('/img/facebook-icon.png') }}" width="28" alt="TKDS Facebook page">
                    </a>
                @endif
                @if(isset($teacher->youtube_link))
                    <a href="{{ $teacher->youtube_link }}" target="_blank">
                        <img src="{{ URL::asset('/img/youtube-icon.png') }}" width="28" alt="TKDS YouTube channel">
                    </a>
                @endif
                @if(isset($teacher->instagram_link))
                    <a href="{{ $teacher->instagram_link }}" target="_blank">
                        <img src="{{ URL::asset('/img/instagram-icon.png') }}" width="28" alt="TKDS Instagram">
                    </a>
                @endif
            </div>
        </div>
      </div>
    </div>
  </div>

  @endforeach

</section>
