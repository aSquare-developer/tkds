<nav class="navbar navbar-expand-lg">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ (request()->segment(1) == '') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('home') }}">Koduleht</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#dancestyle">Tantsustiilid</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#timetable">Tunniplaan</a>
        </li>
        <li class="nav-item {{ (request()->segment(1) == 'rent') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('hall-booking') }}">Rent</a>
        </li>
        <li class="nav-item {{ (request()->segment(1) == 'hinnakiri') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('price-list') }}">Hinnakiri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#contact">Kontakt</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
