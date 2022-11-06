<a class="navbar-brand col-md-auto col-lg-2  px-3 px-md-5 text-center" href="{{ URL::To('/') }}">Kelas Privat</a>
<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="d-md-block d-none w-100 px-lg-5 px-md-3">
    
    <div class="row w-100 " style="color: white">
        <div class="col-auto px-md-2 px-lg-3">
            <a  style="color: white" id="" class="nav-news nav-link nav-bar" aria-current="page" href="{{ URL::route('news') }}">
                News
            </a>
        </div>
        {{-- <div class="col-auto px-md-2 px-lg-3">
            <a  style="color: white" id="" class="nav-tanya-kelas nav-link nav-bar" href="{{ URL::route('chat') }}">
                
                Tanya Kelas
            </a>
        </div> --}}
        {{-- <div class="col-auto px-md-2 px-lg-3">
            <a  style="color: white" id="nav-Profile" class="nav-link nav-bar" href="{{ URL::route('profile') }}">
                
                Profile
            </a>
        </div> --}}
        {{-- <div class="col-auto px-md-2 px-lg-3">
            <a  style="color: white" id="nav-Reward" class="nav-link nav-bar" href="#">
                
                Reward
            </a>
        </div> --}}
        <div class="col-auto px-md-2 px-lg-3">
            <a  style="color: white" id="" class="nav-Practice nav-link nav-bar" href="{{ URL::route('practice') }}">
                
                Latihan Soal
            </a>
        </div>
        <div class="col-auto px-md-2 px-lg-3">
            <a  style="color: white" id="" class="nav-About nav-link nav-bar" href="{{ URL::To('/about-us') }}">
                
                About
            </a>
        </div>
        <div class="col-auto px-md-2 px-lg-3">
            <a  style="color: white" id="" class="nav-materi nav-link nav-bar" href="{{ URL::route('materi') }}">
                
                Materi Pembelajaran
            </a>
        </div>
        @if (!empty(Auth::user()->role))
            @if (Auth::user()->role == 'admin' || Auth::user()->role == 'ADMIN')
                <div class="col-auto px-md-2 px-lg-3">
                    <a  style="color: white" id="" class="nav-buatSoal nav-link nav-bar" href="{{ URL::route('list_paket') }}">
                            
                        Buat Soal
                    </a>
                </div>
            @endif
        @endif
        @if (!empty(Auth::user()->role))
            @if (Auth::user()->role == 'admin' || Auth::user()->role == 'ADMIN')
                <div class="col-auto px-md-2 px-lg-3">
                    <a  style="color: white" id="" class="nav-create-materi nav-link nav-bar" href="{{ URL::route('create_materi') }}">
                            
                        Buat Materi
                    </a>
                </div>
            @endif
        @endif
    </div>

</div>
{{-- <input class="form-control form-control-dark w-100 d-md-block d-none" type="text" placeholder="Search" aria-label="Search"> --}}
{{-- <nav id="" class="navbar navbar-expand-md  navbar-dark bg-dark w-100" style="top: 0rem">
    <div class="container-fluid">
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item pe-4">
          <a id="side-Dashboard" class="nav-link side-bar" aria-current="page" href="{{ URL::route('home') }}">
            News
          </a>
        </li>
        <li class="nav-item pe-4">
          <a id="side-Post" class="nav-link side-bar" href="{{ URL::route('chat') }}">
            
            Post
          </a>
        </li>
        <li class="nav-item pe-4">
          <a id="side-Profile" class="nav-link side-bar" href="{{ URL::route('profile') }}">
            
            Profile
          </a>
        </li>
        <li class="nav-item pe-4">
          <a id="side-Reward" class="nav-link side-bar" href="#">
            
            Reward
          </a>
        </li>
        <li class="nav-item pe-4">
          <a id="side-Practice" class="nav-link side-bar" href="{{ URL::route('practice') }}">
            
            Practice
          </a>
        </li>
        <li class="nav-item pe-4">
          <a id="side-About" class="nav-link side-bar" href="#">
            
            About
          </a>
        </li>
        @if (!empty(Auth::user()->role))
            @if (Auth::user()->role == 'admin' || Auth::user()->role == 'ADMIN')
                
            <li class="nav-item pe-4">
              <a id="side-buatBerita" class="nav-link side-bar" href="{{ URL::route('create_news') }}">
                
                Buat Berita
              </a>
            </li>
            <li class="nav-item pe-4">
              <a id="side-buatSoal" class="nav-link side-bar" href="{{ URL::route('list_paket') }}">
                
                Buat Soal
              </a>
            </li>
            @endif
        @endif
        
    </ul>
            </div>

      
  
    </div>
  </nav> --}}
<div class="col-auto d-md-block d-none">
  <div class=" text-nowrap">
    {{-- <a class="nav-link px-3" href="#"> --}}
        <div class="mx-0 row ms-auto px-3" style="white-space: nowrap;">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <div class=" col-auto nav-item d-inline">
                        <a class="nav-link s12-500-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </div>
                @endif

                @if (Route::has('register'))
                    <div class=" col-auto nav-item d-inline">
                        <a class="nav-link s12-500-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </div>
                @endif
            @else
                <div class="col-auto nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link s12-500-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} 
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" style="position: absolute;" aria-labelledby="navbarDropdown">
                        
                        <a class="dropdown-item" href="{{ URL::route('profile') }}">
                            
                            Profile
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            @endguest
            </div>
    {{-- </a> --}}
  </div>
</div>
