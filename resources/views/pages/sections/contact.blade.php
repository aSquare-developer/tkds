<!--Section: contact-->
<section id="contact" class="pt-5">
  <div class="container">

    <h2 class="h1-responsive font-weight-bold text-center mb-5">Contact us</h2>

    <div class="row">
      <div class="col-md-9 mb-md-0 mb-5">
        <form action="/contact-us" method="post">@csrf
          <div class="row">
            <div class="col-md-6">
              <div class="md-form mb-3">
                <input type="text" id="contact-name" name="name" class="form-control" placeholder="Nimi" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="md-form mb-3">
                <input type="email" id="contact-email" name="email" class="form-control" placeholder="E-post" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="md-form mb-3">
                <textarea id="contact-message" class="form-control md-textarea" name="message" rows="3" placeholder="Your message" required></textarea>
              </div>
            </div>
          </div>

          <div class="text-center text-md-left">
            <button type="submit" class="btn btn-outline-success">Saada</button>
          </div>
        </form>
      </div>

      <div class="col-md-3 text-center">
        <ul class="list-unstyled mt-3">
          <li>
            <p>Tatari 64, 10134 Tallinn, Estonia</p>
          </li>
          <li>
            <p>+372 5666 9328</p>
          </li>
          <li>
            <p class="mb-0">info@tkds.ee</p>
          </li>
        </ul>
      </div>


    </div>
    <!-- Grid row -->

  </div>

</section>
<!--Section: contact-->
