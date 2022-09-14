<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{ (request()->segment(2) == '') ? 'active' : '' }}" href="{{ route('dashboard-index') }}">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
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
