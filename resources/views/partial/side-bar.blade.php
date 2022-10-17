
    
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-none bg-light sidebar collapse pt-5" style="top: 0rem">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a id="" class="nav-news nav-link side-bar" aria-current="page" href="{{ URL::route('news') }}">
                <span data-feather="home"></span>
                News
              </a>
            </li>
            <li class="nav-item">
              <a id="" class="nav-tanya-kelas nav-link side-bar" href="{{ URL::route('chat') }}">
                <span data-feather="file"></span>
                Tanya Kelas
              </a>
            </li>
            {{-- <li class="nav-item">
              <a id="" class="nav-Profile nav-link side-bar" href="{{ URL::route('profile') }}">
                <span data-feather="shopping-cart"></span>
                Profile
              </a>
            </li> --}}
            {{-- <li class="nav-item">
              <a id="" class="nav-Reward nav-link side-bar" href="#">
                <span data-feather="users"></span>
                Reward
              </a>
            </li> --}}
            <li class="nav-item">
              <a id="" class="nav-Practice nav-link side-bar" href="{{ URL::route('practice') }}">
                <span data-feather="bar-chart-2"></span>
                Latihan Soal
              </a>
            </li>
            <li class="nav-item">
              <a id="" class="nav-About nav-link side-bar" href="#">
                <span data-feather="layers"></span>
                About
              </a>
            </li>
            <li class="nav-item">
              <a id="" class="nav-About nav-link side-bar" href="#">
                <span data-feather="layers"></span>
                Materi Pembelajaran
              </a>
            </li>
            @if (!empty(Auth::user()->role))
                @if (Auth::user()->role == 'admin' || Auth::user()->role == 'ADMIN')
                    
                {{-- <li class="nav-item">
                  <a id="" class="nav-buatBerita nav-link side-bar" href="{{ URL::route('create_news') }}">
                    <span data-feather="layers"></span>
                    Buat Berita
                  </a>
                </li> --}}
                <li class="nav-item">
                  <a id="" class="nav-buatSoal nav-link side-bar" href="{{ URL::route('list_paket') }}">
                    <span data-feather="layers"></span>
                    Buat Soal
                  </a>
                </li>
                @endif
            @endif
            
                </ul>
  
          {{-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Current month
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last quarter
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
              </a>
            </li>
          </ul> --}}
          
      
        </div>
        <div class="mobile fixed-bottom">
          @guest
          @if (Route::has('login'))
          
            <div class=" col-auto nav-item d-inline">
                <a class="nav-link s14-500-blue" href="{{ route('login') }}">{{ __('Login') }}</a>
              </div>
              @endif
              
              @if (Route::has('register'))
              <div class=" col-auto nav-item d-inline">
                <a class="nav-link s14-500-blue" href="{{ route('register') }}">{{ __('Register') }}</a>
              </div>
              @endif
              @else
              <div class="col-auto nav-item dropdown">
                <a id="navbarDropdown" class="nav-link s14-500-blue dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
      </nav>
@push('script')
<script>
    
    var title = '<?php echo $title; ?>';
    
    // if (title == 'KelasNews') {
    //     $("#side-bar").removeClass('active');
    //     $("#side-news").addClass('active');
    // }
    // if (title == 'Post') {
    //     $("#side-bar").removeClass('active');
    //     $("#side-Post").addClass('active');
    // }
    // if (title == 'Profile') {
    //     $("#side-bar").removeClass('active');
    //     $("#side-Profile").addClass('active');
    // }
    // if (title == 'Reward') {
    //     $("#side-bar").removeClass('active');
    //     $("#side-Reward").addClass('active');
    // }
    // if (title == 'Award') {
    //     $("#side-bar").removeClass('active');
    //     $("#side-Award").addClass('active');
    // }
    // if (title == 'About') {
    //     $("#side-bar").removeClass('active');
    //     $("#side-About").addClass('active');
    // }
    // $(document).ready(function(){
    //     $('img').error(function(){
    //         $(this).attr('src', 'https://ayo.co.id/backend/assets/images/avatar-default.jpg');
    //     });
    // });
</script>
    {{-- <script>
      $('#side-Reward').click(function() {
        alert( "Coming soon" );
      });
      $('#side-Award').click(function() {
        alert( "Coming soon" );
      });
      $('#side-About').click(function() {
        alert( "Coming soon" );
      });
    </script> --}}
@endpush