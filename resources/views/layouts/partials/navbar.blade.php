 <header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <img src="{{ asset ('img/logo.png')}}" class="bi me-2" width="40" height="35" class="rounded-circle">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 link-dark {{ Request::is('/*') ? 'active' : ''}}" style="font-size: 17px;">Home</a></li>
          <li><a href="/tvshow" class="nav-link px-2 link-dark {{ Request::is('tvshow*') ? 'active' : ''}}" style="font-size: 17px;">Tvshow</a></li>
          <li><a href="/film" class="nav-link px-2 link-dark {{ Request::is('film*') ? 'active' : ''}}" style="font-size: 17px;">Film</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control" placeholder="Search...">
        </form>

        @auth
        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class='bx bxs-user bx-sm'></i>
          </a>
            @can('admin')
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="/user/{{auth()->user()->id}}">Profil</a></li>
              <li><a class="dropdown-item" href="/admin">Admin</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><form action="/logout" method="post">
                          @csrf
                        <button type="submit" class="btn btn-info dropdown-item">Logout</button>
                      </form></li>
            </ul>
            @else
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="/user/{{auth()->user()->id}}">Profil</a></li>
              <li><a class="dropdown-item" href="/daftarku">Daftarku</a></li>
              <li><a class="dropdown-item" href="/user/history">History tontonan</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><form action="/logout" method="post">
                          @csrf
                        <button type="submit" class="btn btn-info dropdown-item">Logout</button>
                      </form></li>
            </ul>
            @endcan
          
        </div>
        @else
        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class='bx bxs-user bx-sm'></i>
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="/login">Login</a></li>
            <li><a class="dropdown-item" href="/register">Register</a></li>
          </ul>
        </div>
        @endauth
      </div>
    </div>
  </header>




 