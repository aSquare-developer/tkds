<section id="dancestyle" class="text-center pt-5">

  <div class="container">
    <div class="intro">
        <h2 class="text-center">TKDS Dancestyles</h2>
        <p class="text-center">Stuudio on avatud aastast 2012 ning meil õnnestus juba publiku armastust ja õpilaste usaldust saavutada. Regulaarselt leiavad meil aset masterclassid, osaleme erinevatel üritustel ja käime võistlustel. Jõuame ka finaali ja seal esimeste kohtadeni. Meie õpilaste edusammudega saate te tutvuda meie hooaja kontserditel, mis korraldatakse talvel ja suvel.</p>
        <p class="text-center">See on kool, kus inimesed, kes esimest korda puutuvad kokku kaasaegse tantsuga muutuvad kogenud tantsijateks, parandavad oma füüsilise võimekuse ning omandavad vajalikud oskused kaasaegsetes stiilides. Meid kõiki ühendab ühine eesmärk ja ääretu armastus tantsu vastu. See on koht, kus tantsijad saavad lähedaseks, leiavad sõpru ja elavad koos üle raskeid tööpäevi, alandavad stressi ning saavad tõelise naudingu.Soovime kõigile tantsu :)</p>
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
