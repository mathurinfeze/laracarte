<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('home')}}">{{env(`APP_NAME`)}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="{{set_active_route('home')}}">
        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="{{set_active_route('about')}}">
          <a class="nav-link" href="{{route('about')}}">About</a>
        </li>
        <li class=" ">
          <a class="nav-link" href="#">Artisan</a>
        </li>
        <li class="nav-item  dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Planet
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Laravel.com</a>
            <a class="dropdown-item" href="#">Laravel.io</a>
            <a class="dropdown-item" href="#">Laracasts</a>
            <a class="dropdown-item" href="#">Larajobs</a>
            <a class="dropdown-item" href="#">Laravel New</a>
            <a class="dropdown-item" href="#">Lara</a>
          </div>
        </li>
        <li class="{{set_active_route('contact')}}">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
        </li>       
      </ul>
      <ul class="navbar-nav navbar-right ">
        <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
        </li>
      </ul>
    </div>
  </nav>