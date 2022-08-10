<header>

  <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
  <div class="overlay"></div>

  <!-- The HTML5 video element that will create the background video on the header -->
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://video.wixstatic.com/video/9e5bc0_00cdc0e97ee543b38bad34b280552a7d/1080p/mp4/file.mp4" type="video/mp4">
  </video>

  <!-- The header content -->
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">TKDS Dance Studio</h1>
        <p class="lead mb-4">Tantsukool kaasaegsete tantsustiilidega, mis sobib inimestele igas vanuserühmas ja erineva tasemega. </p>
        <!-- <a href="#" class="btn btn-outline-success btn-lg">VÕTA PROVITRENNI </a> -->
        <a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target=".register-modal-lg">REGISTREERI TUNDIDESSE</a>
      </div>
    </div>
  </div>
</header>

<div class="modal fade register-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Uute tantsijate vastuvõtt 2022/23</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form class="" action="/register-for-lessons" method="post">@csrf

          <div class="md-form mb-2">
            <input type="text" class="form-control" name="fullname" placeholder="Ees- ja perekonnanimi" required>
          </div>
          <div class="md-form mb-2">
            <input type="text" class="form-control" name="aeg" placeholder="Vanus" required>
          </div>
          <div class="md-form mb-2">
            <input type="text" class="form-control" name="dancestyle" placeholder="Tantsustiil" required>
          </div>
          <div class="md-form mb-2">
            <input type="email" class="form-control" name="email" placeholder="E-post" required>
          </div>

          <div class="float-right">
            <button type="submit" class="btn btn-outline-success">Saada</button>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>
