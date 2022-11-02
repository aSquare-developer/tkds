<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ (request()->segment(2) == '') ? 'active' : '' }}" href="{{ route('dashboard-index') }}">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ (request()->segment(2) == 'header') ? 'active' : '' }}" href="{{ route('dashboard-header') }}">
          <span data-feather="list"></span>
          Main page
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ (request()->segment(2) == 'dancestyle') ? 'active' : '' }}" href="{{ route('dashboard-dancestyle') }}">
          <span data-feather="list"></span>
          Dancestyles
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ (request()->segment(2) == 'rent') ? 'active' : '' }}" href="{{ route('dashboard-rent') }}">
          <span data-feather="list"></span>
          Rent page
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ (request()->segment(2) == 'timetable') ? 'active' : '' }}" href="{{ route('dashboard-timetable') }}">
          <span data-feather="list"></span>
          Timetable page
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ (request()->segment(2) == 'tasks') ? 'active' : '' }}" href="{{ route('dashboard-tasks') }}">
          <span data-feather="list"></span>
          Tasks
        </a>
      </li>

    </ul>
  </div>
</nav>
