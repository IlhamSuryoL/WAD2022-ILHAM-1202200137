<nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="" href="my-car
          ">MyCar</a>
          </li>
        </ul>
        <div class="navprofil ms-auto"> 
          <a id="{{ isset($_COOKIE['nama']) ? 'hide' : '' }}" class="nav-link nav-login login-button btn btn-light" href="/login">Login</a>
        <div class="dropdown" id="{{ !isset($_COOKIE['nama']) ? 'hide' : '' }}">
          <a class="btn btn-light dropdown-toggle mb-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ isset($_COOKIE['nama']) ? $_COOKIE['nama']: ''}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?page=profil">Profile</a></li>
            <li><a class="dropdown-item" href="index.php?page=logout">Log Out</a></li>
          </ul>
        </div>
        </div>
      </div>
      <div>
        <a href="index.php?page=additem" class="addcar-button btn btn-light ms-4 mb-2" class="il" id="{{ isset($_COOKIE['nama']) ? '' : 'hide' }}" >Add Car</a>
      </div>
    </div>

  </nav>
