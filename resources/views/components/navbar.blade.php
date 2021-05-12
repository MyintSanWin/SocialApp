<nav class="navbar navbar-expand-lg  sticky-top text-white bg-info">
  <div class="container-fluid">
    <ul class="navbar-nav d-flex flex-row">
      <!-- Icons -->
      <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="{{route('home')}}">
       Social App
        </a>
      </li>
      <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="{{route('home')}}">
          Home
        </a>
      </li>
      <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="{{route('createPost')}}">
             Create Post
        </a>
      </li>

      @can ('admin')
         <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="{{route('admin.home')}}">
            Admin Control 
        </a>
      </li> 
      @endcan
      
      <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="{{route('contactUs')}}">
          Contact Us
        </a>
      </li>
      <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="#">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <!-- Icon dropdown -->
      <li class="nav-item me-3 mr-3 me-lg-0 dropdown ">
        <a
          class="nav-link dropdown-toggle mr-5 "
          href="#"
          id="navbarDropdown"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          
        <img src="{{asset('images/profiles/'.auth()->user()->image)}}" class="rounded-circle z-index-0" height="30px" width="30px" alt="">
        
        </a>
        <ul class="dropdown-menu"  aria-labelledby="navbarDropdown ">
          <li><a class="dropdown-item" href="#">{{auth()->user()->name}}</a></li>
          <li><a class="dropdown-item" href="{{route('userprofile')}}">User Profile</a></li>
          <li><a class="dropdown-item" href="{{route('logout')}}">Log Out</a></li>
          <li><hr class="dropdown-divider" /></li>
          
        </ul>
      </li>
    </ul>
  </div>
</nav>