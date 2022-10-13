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
        <h1 class="display-3">TKDS Dance Studio</h1>
        <p class="lead mb-4">Tantsustuudio kaasaegsete tantsustiilidega, mis sobib inimestele igas vanuserühmas ja erineva tasemega. </p>

        <div class="row">
          <div class="col">
            <a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target=".register-modal-lg">REGISTREERI TUNDIDESSE</a>
          </div>
        </div>

        <div class="row">
          <div class="col mt-3">
            <a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target=".trial-training-modal-lg">PROOVITRENN</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</header>

<div class="modal fade register-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
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

<div class="modal fade trial-training-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Proovitrenni registreerimine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form class="" action="/register-for-trial-training" method="post">@csrf

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
