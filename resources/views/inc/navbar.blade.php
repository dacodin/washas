
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #093145;" id="mynav">
          {{-- <nav class="navbar navbar-expand-md navbar-light bg-light"> --}}
          <a class="navbar-brand" href="/"><img class="logo" alt="Washas Logo" src="https://drive.google.com/uc?export=view&id=1I9REjBTGDno7h6c9F511oZlGVHRXsv0k"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse " id="navbarsExampleDefault">
      
             <ul class="navbar-nav ml-auto">
                <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item {{Request::is('booking')  ? 'active' : ''}}">
                  <a class="nav-link" href="booking">My Booking</a>
                </li>
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="#" data-toggle="modal" data-target=".bd-Login-modal-lg">{{ __('Login') }}</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#" data-toggle="modal" data-target=".bd-Register-modal-lg">{{ __('Register') }}</a>
                  </li>
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                         <span class="fa fa-user-circle-o"></span> {{ Auth::user()->firstname }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>

          </div>
        </nav>

        <!--Registration Modal -->
        <div class="modal fade bd-Register-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="myLargeModalLabel">New User Register</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    @include('auth.register')
                  </div>
                </div>
              </div>
        </div>
              <!-- Login Modal --> 
              <div class="modal fade bd-Login-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="myLargeModalLabel">User Login</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                        @include('auth.login')
                      </div>
                    </div>
                  </div>
              </div>