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
            <h1 class="card-title pricing-card-title">-35%</h1>
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
          <h2 class="my-0 font-weight-normal">??KSIKTUND</h2>
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
          <h1 class="card-title pricing-card-title">60???</h1>
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
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">PIIRAMATU PAKETT</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">100???</h1>
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
          1H X N??DALAS / KUU - 42??? <br />
          1.5H X N??DALAS / KUU - 50??? <br />
          2H X N??DALAS / KUU - 55??? <br />
          3H X N??DALAS / KUU - 60???
        </p>
        <p>
          <strong>Kui proovitunnis viibiv ??pilane otsustab tundi j??tkata, siis proovitund on hinna sees.</strong>
        </p>
        <p>
          Kui trenn toimub ??ks kord n??dalas ning kestab ??ks tund kord, siis kuumakse on 42???<br />
          Kui trenn toimub ??ks kord n??dalas ning kestab poolteist tundi kord, siis on 50???<br />
          Kui trenn toimub kaks korda n??dalas ning kestab ??ks tund kord, siis kuumakse on 55???<br />
          Kui trenn toimub kaks korda n??dalas ning kestab poolteist tundi kord, siis kuumakse on 60???
        </p>
        <p>
          Kuupakett sisaldab:<br />
          4 trennid kuus (kui trenn toimub 1 kord n??dalas, 1H / 1.5H / 2H)<br />
          8 trennid kuus (kui trenn toimub 2 korda n??dalas, 1H / 1.5H)
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
          Kahe stiili valimisel on pakkumine -35% kogusummalt.
        </p>
        <p>
          <strong>Kui proovitunnis viibiv ??pilane otsustab tundi j??tkata, siis proovitund on hinna sees.</strong>
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
          Tasuta proovitreeningu saamiseks palun kirjutage meile info@tkds.ee. <br />
          T??psustage mis stiili soovite v??tta ja me kutsume Teid tundi. <br />
          Registreerumise puudumisel v??etakse tasu ??hekordse ??ppetunni eest.
        </p>
        <p>
          <strong>Kui proovitunnis viibiv ??pilane otsustab tundi j??tkata, siis proovitund on hinna sees.</strong>
        </p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade single-lesson-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="singleLessonModalTitle">??KSIKTUND</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <p>
          ??ks trenn mis kestab ??ks tund - 13???<br />
          ??ks trenn mis kestab poolteist tundi - 15???<br />
          ??ks trenn mis kestab kaks tundi - 20???<br /><br />
          ??hekordse visiidi korral, saate maksta enne trenni sularahas
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
          10H kaart sobib ainult uutele ??pilastele ja seda saab kasutada erinevate stiilide v??tmisel ??ks kord.
        </p>
      </div>
    </div>
  </div>
</div>

@endsection
