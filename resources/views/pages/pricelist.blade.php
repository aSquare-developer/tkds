@extends('layout')

@section('title', config('app.name') . ' - ' . 'Hinnakiri')

@section('content')

@include('pages.sections.header')

<div class="container pt-5">
  <h1 class="text-center pb-5">HINNAKIRI 2022/23</h1>

  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 box-shadow" data-toggle="modal" data-target=".one-style-modal-lg">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">&nbsp;</h4>
      </div>
      <div class="card-body">
        <br />
        <h1 class="my-0 font-weight-normal">1 STIIL</h1>
      </div>
    </div>
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
    <div class="card mb-4 box-shadow" data-toggle="modal" data-target=".trial-exercise-modal-lg">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">&nbsp;</h4>
      </div>
      <div class="card-body">
        <br />
        <h1 class="my-0 font-weight-normal">PROOVITRENN</h1>
        <h4>1H - <strong>TASUTA</strong></h4>
      </div>
    </div>
  </div>

  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 box-shadow" data-toggle="modal" data-target=".single-lesson-modal-lg">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">&nbsp;</h4>
      </div>
      <div class="card-body">
        <h2 class="my-0 font-weight-normal">ÜKSIKTUND</h2>
      </div>
    </div>
    <div class="card mb-4 box-shadow" data-toggle="modal" data-target=".10-hour-modal-lg">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">&nbsp;</h4>
      </div>
      <div class="card-body">
        <h3 class="my-0 font-weight-normal">10H KAART</h3>
        <h1 class="card-title pricing-card-title">60€</h1>
      </div>
    </div>
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

  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">PIIRAMATU PAKETT</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">100€</h1>
      </div>
    </div>
  </div>

</div>


<div class="modal fade one-style-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="oneStyleModalTitle">1 STIIL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-unstyled mt-3 mb-4">
          <li>1H X NÄDALAS / KUU - 42€</li>
          <li>1.5H X NÄDALAS / KUU - 50€</li>
          <li>2H X NÄDALAS / KUU - 55€</li>
          <li>3H X NÄDALAS / KUU - 60€</li>
        </ul>
        <p>
          Kuupakett sisaldab:<br />
          4 trennid kuus (kui trenn toimub 1 kord nädalas, 1.5H / 2H)<br />
          8 trennid kuus (kui trenn toimub 2 korda nädalas, 1H / 1.5H)
        </p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade trial-exercise-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="trialExerciseModalTitle">PROOVITRENN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-unstyled mt-3 mb-4">
          <li>1.5H - 10€</li>
          <li>2H - 15€</li>
        </ul>
        <p>
          Kui soovite tundidest jätkata, siis proovitrenn on kuupaketi sees.<br />
          Proovitundi tuleks registreeruda eposti teel.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade single-lesson-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="singleLessonModalTitle">ÜKSIKTUND</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-unstyled mt-3 mb-4">
          <li>1H | 10€</li>
          <li>1.5H | 15€</li>
          <li>2H | 20€</li>
        </ul>
        <p>
          Ühekordse visiidi korral, saate maksta enne trenni sularahas
        </p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade 10-hour-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="10HourModalTitle">10H KAART</h5>
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

@endsection
