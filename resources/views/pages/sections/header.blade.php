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
        <a href="#" class="btn btn-outline-success btn-lg" data-toggle="modal" data-target=".register-modal-lg">REGISTREERI TUNDIDESSE</a>
      </div>
    </div>
  </div>
</header>

<div class="modal fade register-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Uute tantsijate vastuvõtt 2021/22</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>TKDS STUDIO<br />
        Asukoht: Tatari 64 , 2 korrus<br />
        info@tkds.ee</p>

        <p>Pärast vormi täitmist teile saadetakse registreerimise kinnitus. Palun võtke meiega ühendust e-posti teel, kui olete ankeedi esitanud, kuid ei saanud kinnitust.</p>

        <form class="" action="/register-for-lessons" method="post" id="registerForm">@csrf

          <div class="md-form mb-2">
            <input type="text" class="form-control" name="firstlastname" placeholder="Ees- ja perekonnanimi" required>
          </div>
          <div class="md-form mb-2">
            <input type="text" class="form-control" name="aeg" placeholder="Vanus" required>
          </div>
          <div class="md-form mb-2">
            <input type="email" class="form-control" name="email" placeholder="E-post" required>
          </div>
          <div class="md-form mb-2">
            <input type="text" class="form-control" name="phone" placeholder="Telefon" required>
          </div>
          <div class="md-form mb-2">
            <input type="text" class="form-control" name="experience" placeholder="Tantsukogemus">
          </div>

          <!-- Tantsustiil -->
          <div class="md-form mb-2">
            <fieldset>
              <legend>Tantsustiil</legend>
                <div class="form-group mb-2">
                  <input type="checkbox" id="dancehall-y-middle" name="dancestyle[]" value="dancehall-y-middle">
                  <label for="dancehall-y-middle">Dancehall-Y MIDDLE (Tantsijad kogemusega Dancehallis)</label>
                </div>
                <div class="form-group mb-2">
                  <input type="checkbox" id="dancehall-beginners" name="dancestyle[]" value="dancehall-beginners">
                  <label for="dancehall-beginners">Dancehall BEGINNERS (Algajad)</label>
                </div>
                <div class="form-group mb-2">
                  <input type="checkbox" id="dancehall-kids" name="dancestyle[]" value="dancehall-kids">
                  <label for="dancehall-kids">Dancehall KIDS (Vanus 8-13)</label>
                </div>
                <div class="form-group mb-2">
                  <input type="checkbox" id="dancehall-choreo" name="dancestyle[]" value="dancehall-choreo">
                  <label for="dancehall-choreo">Dancehall Choreo</label>
                </div>
                <div class="form-group mb-2">
                  <input type="checkbox" id="contemporary-open-group" name="dancestyle[]" value="contemporary-open-group">
                  <label for="contemporary-open-group">Contemporary OPEN GROUP</label>
                </div>
                <div class="form-group mb-2">
                  <input type="checkbox" id="contemporary-pro-group" name="dancestyle[]" value="contemporary-pro-group">
                  <label for="contemporary-pro-group">Contemporary PRO GROUP</label>
                </div>
                <div class="form-group mb-2">
                  <input type="checkbox" id="contemporary-ballet" name="dancestyle[]" value="contemporary-ballet">
                  <label for="contemporary-ballet">Contemporary + Ballet</label>
                </div>
                <div class="form-group mb-2">
                  <input type="checkbox" id="vogue" name="dancestyle[]" value="vogue">
                  <label for="vogue">Vogue</label>
                </div>
                <div class="form-group mb-2">
                  <input type="checkbox" id="hip-hop-freestyle" name="dancestyle[]" value="hip-hop-freestyle">
                  <label for="hip-hop-freestyle">Hip-hop freestyle</label>
                </div>
                <div class="form-group mb-2">
                  <input type="checkbox" id="hip-hop-choreography" name="dancestyle[]" value="hip-hop-choreography">
                  <label for="hip-hop-choreography">Hip-hop choreography</label>
                </div>
                <div class="form-group mb-2">
                  <input type="checkbox" id="house" name="dancestyle[]" value="house">
                  <label for="house">House</label>
                </div>
                <div class="form-group mb-2">
                  <input type="checkbox" id="heels" name="dancestyle[]" value="heels">
                  <label for="heels">Heels</label>
                </div>
                <div class="form-group mb-2">
                  <input type="checkbox" id="stretching" name="dancestyle[]" value="stretching">
                  <label for="stretching">Stretching</label>
                </div>
                <div class="form-group mb-2">
                  <input type="checkbox" id="breakdance" name="dancestyle[]" value="breakdance">
                  <label for="breakdance">Breakdance</label>
                </div>
                <div class="form-group mb-2">
                  <input type="checkbox" id="streetdance" name="dancestyle[]" value="streetdance">
                  <label for="streetdance">TÄNAVATANTS</label>
                </div>
                <div class="form-group mb-2">
                  <input type="checkbox" id="full-package" name="dancestyle[]" value="full-package">
                  <label for="full-package">PIIRAMATU PAKETT</label>
                </div>
            </fieldset>
          </div>

          <!-- Kuidas te meid leidsite? -->
          <div class="md-form mb-2">
            <fieldset>
              <legend>Kuidas te meid leidsite?</legend>
                <div class="md-form mb-1">
                  <input type="checkbox" id="friends" name="howfindus[]" value="friends">
                  <label for="friends">Sõbrad, tuttavad</label>
                </div>
                <div class="md-form mb-1">
                  <input type="checkbox" id="social-media" name="howfindus[]" value="social-media">
                  <label for="social-media">Sotsiaal media</label>
                </div>
                <div class="md-form mb-1">
                  <input type="checkbox" id="other" name="howfindus[]" value="other">
                  <label for="other">Muud</label>
                </div>
            </fieldset>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-outline-success">Send</button>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>
