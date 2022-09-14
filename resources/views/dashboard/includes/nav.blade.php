<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">TKDS</a>

  <div class="dropdown">
    <a class="nav-link dropdown-toggle" href="" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
    <div class="dropdown-menu" aria-labelledby="dropdown03">
      <a class="dropdown-item" href="#">Profile</a>
      <a class="dropdown-item" href="{{ route('logout.perform') }}">Log out</a>
    </div>
  </div>
  
</nav>
