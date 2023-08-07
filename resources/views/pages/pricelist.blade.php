@extends('layout')

@section('title', config('app.name') . ' - ' . 'Hinnakiri')

@section('content')

@include('pages.sections.header')

<div class="container pt-5 text-center">
  <h1 class="text-center pb-5">HINNAKIRI 2022/23</h1>

  <div class="row">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="card mb-4 box-shadow" data-toggle="modal" data-target=".one-style-modal-lg">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">&nbsp;</h4>
        </div>
        <div class="card-body">
          <br />
          <h1 class="my-0 font-weight-normal">1 STIIL</h1>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12" data-toggle="modal" data-target=".one-plus-one-modal-lg">
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">
            <span class="bg-danger padding-2px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size15 xs-font-size13">LEMMIK</span>
          </h4>
        </div>
        <div class="card-body">
          <div class="card-body">
            <h4>1 STIIL + 1 STIIL</h4>
            <h1 class="card-title pricing-card-title">-20%</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="card mb-4 box-shadow" data-toggle="modal" data-target=".trial-exercise-modal-lg">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">&nbsp;</h4>
        </div>
        <div class="card-body">
          <br />
          <h1 class="my-0 font-weight-normal">PROOVITRENN</h1>
          <h4><strong>TASUTA</strong></h4>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="card mb-4 box-shadow" data-toggle="modal" data-target=".single-lesson-modal-lg">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">&nbsp;</h4>
        </div>
        <div class="card-body">
          <h2 class="my-0 font-weight-normal">ÜKSIKTUND</h2>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="card mb-4 box-shadow" data-toggle="modal" data-target=".ten-hour-modal-lg">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">&nbsp;</h4>
        </div>
        <div class="card-body">
          <h3 class="my-0 font-weight-normal">10H KAART</h3>
          <h1 class="card-title pricing-card-title">75€</h1>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">&nbsp;</h4>
        </div>
        <div class="card-body">
          <h3 class="my-0 font-weight-normal">PERESOODUSTUS</h3>
          <h1 class="card-title pricing-card-title">-10%</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4 box-shadow" data-toggle="modal" data-target=".unlimited-package-lg">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">PIIRAMATU PAKETT</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">115€</h1>
          <p>Tantsite nii palju kui soovite :)</p>
        </div>
      </div>
    </div>
  </div>

</div>


<div class="modal fade one-style-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="oneStyleModalTitle">1 STIIL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
            1H X NÄDALAS / KUU - 48€ <br />
          1.5H X NÄDALAS / KUU - 50€ <br />
          2H X NÄDALAS / KUU - 55€ <br />
          2.5H X NÄDALAS / KUU - 60€
        </p>
        <p>
          <strong>Kui proovitunnis viibiv õpilane otsustab tundi jätkata, siis proovitund on hinna sees.</strong>
        </p>
        <p>
            Kui trenn toimub üks kord nädalas ning kestab üks tund kord, siis kuumakse on 48€ <br/>
            Kui trenn toimub üks kord nädalas ning kestab poolteist tundi kord, siis on 50€ <br/>
            Kui trenn toimub kaks korda nädalas ning kestab üks tund kord VÕI kui trenn toimub üks kord nädalas ning kaks tundi kord, siis kuumakse on 55€ <br/>
            Kui trenn toimub kaks korda nädalas ning kestab üks tund ja viisteist minutit kotd, siis kuumakse on 60€
        </p>
        <p>
            Kuupakett sisaldab: <br />
            4 trennid kuus (kui trenn toimub 1 kord nädalas, 1H / 1.5H / 2H) <br />
            8 trennid kuus (kui trenn toimub 2 korda nädalas, 1H / 1.15H)
        </p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade one-plus-one-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="onePlusOneModalTitle">1 STIIL + 1 STIIL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Kahe stiili valimisel on pakkumine -20% kogusummalt.
        </p>
        <p>
          <strong>Kui proovitunnis viibiv õpilane otsustab tundi jätkata, siis proovitund on hinna sees.</strong>
        </p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade trial-exercise-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="trialExerciseModalTitle">PROOVITRENN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p>
              1h - TASUTA <br />
              1.5h - 7 euro <br />
              2h - 10 euro
          </p>
        <p>
            Tasuta proovitreeningu saamiseks palun registreeruge <a href="{{ route('registerForTrialTrainingPage') }}">selle lingi kaudu</a><br />
            Registreerumise puudumisel võetakse tasu ühekordse õppetunni eest.<br />
            Vastuseks Teie registreerimisele võtame Teiega ühendust ja kirjutame, mis päeval ja kellaajal saate tulla.<br />
            Ainult sel juhul kinnitatakse registreerimine proovitundi.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade single-lesson-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="singleLessonModalTitle">ÜKSIKTUND</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <p>
            Üks trenn mis kestab 1h / 1.15h- 15€<br />
            Üks trenn mis kestab poolteist tundi - 17€<br />
            Üks trenn mis kestab kaks tundi - 20€<br />
            <br />
            Ühekordse visiidi korral, saate maksta enne trenni sularahas
        </p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade ten-hour-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tenHourModalTitle">10H KAART</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          10H kaart sobib ainult uutele õpilastele ja seda saab kasutada erinevate stiilide võtmisel üks kord.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade unlimited-package-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tenHourModalTitle">PIIRAMATU PAKETT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    See pakett kehtib avatud rühmades kõikidel tundidel osalemisel.<br />
                    Täpsustamiseks, millised rühmad on avatud, küsige oma mentorilt või kirjutage meile posti teel.<br />
                    Suletud rühmade külastamine on võimalik ainult mentori nõusolekul
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
