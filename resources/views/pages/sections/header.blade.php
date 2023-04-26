<header>

  <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
  <div class="overlay"></div>

  <!-- The HTML5 video element that will create the background video on the header -->
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="{{ URL::asset('/video/tkds.mp4') }}" type="video/mp4">
  </video>

  <!-- The header content -->
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="fs-1">{{ $header->title }}</h1>
        <p class="lead mb-4">{{ $header->sub_title }}</p>

        <div class="row">
          <div class="col">
            <a href="{{ route('registerForLessonsPage') }}" class="btn btn-success btn-lg">{{ $header->register_button }}</a>
          </div>
        </div>

        <div class="row">
          <div class="col mt-3">
            <a href="{{ route('registerForTrialTrainingPage') }}" class="btn btn-success btn-lg">{{ $header->trial_button }}</a>
          </div>
        </div>

      </div>
    </div>
  </div>

</header>
