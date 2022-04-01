<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" method="GET" action="{{ route('s.ukrainian.search') }}">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative input-group-merge">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="{{ __('shop.topmenu.search') }}" name="q" type="text">
            </div>
          </div>
          <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </form>
        <ul class="navbar-nav align-items-center  ml-md-auto ">
          <li class="nav-item d-xl-none">
            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </div>
          </li>
          <li class="nav-item d-sm-none">
            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
              <i class="ni ni-zoom-split-in"></i>
            </a>
          </li>
          <!--<li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-bell-55"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
              <div class="px-3 py-3">
                <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
              </div>
              <div class="list-group list-group-flush">
                <a href="#!" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <h4 class="mb-0 text-sm">John Snow</h4>
                        </div>
                        <div class="text-right text-muted">
                          <small>2 hrs ago</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                    </div>
                  </div>
                </a>
                <a href="#!" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <h4 class="mb-0 text-sm">John Snow</h4>
                        </div>
                        <div class="text-right text-muted">
                          <small>3 hrs ago</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                    </div>
                  </div>
                </a>
                <a href="#!" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <h4 class="mb-0 text-sm">John Snow</h4>
                        </div>
                        <div class="text-right text-muted">
                          <small>5 hrs ago</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                    </div>
                  </div>
                </a>
                <a href="#!" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <h4 class="mb-0 text-sm">John Snow</h4>
                        </div>
                        <div class="text-right text-muted">
                          <small>2 hrs ago</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                    </div>
                  </div>
                </a>
                <a href="#!" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <img alt="Image placeholder" src="../assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <h4 class="mb-0 text-sm">John Snow</h4>
                        </div>
                        <div class="text-right text-muted">
                          <small>3 hrs ago</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                    </div>
                  </div>
                </a>
              </div>
              <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
            </div>
          </li>-->

          <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-globe"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg  dropdown-menu-right  py-0 overflow-hidden">
                  <div class="w-100 text-center mt-2">
                      <span class="h4 text-center text-dark w-100">Wybierz język</span>
                  </div>
                <div class="row shortcuts px-4 justify-content-center">
                  <a href="{{ route('language', ['pl']) }}" class="col-4 my-2 shortcut-item text-center">
                    <span class="shortcut-media avatar rounded-circle">
                      <img src="https://cdn.jsdelivr.net/npm/round-flag-icons/flags/pl.svg" alt="">
                    </span>
                    @if (session('locale') == 'pl')
                    <small class="font-weight-700">{{ __('main.langlist.current.polish') }}</small>
                    @else
                    <small>{{ __('main.langlist.current.polish') }} ({{ __('main.langlist.foreign.polish') }})</small>
                    @endif
                  </a>
                  <a href="{{ route('language', ['en']) }}" class="col-4 my-2 shortcut-item text-center">
                    <span class="shortcut-media avatar rounded-circle">
                      <img src="https://cdn.jsdelivr.net/npm/round-flag-icons/flags/gb.svg" alt="">
                    </span>
                    @if (session('locale') == 'en')
                    <small class="font-weight-700">{{ __('main.langlist.current.english') }}</small>
                    @else
                    <small>{{ __('main.langlist.current.english') }} ({{ __('main.langlist.foreign.english') }})</small>
                    @endif
                  </a>
                  <a href="{{ route('language', ['uk']) }}" class="col-4 my-2 shortcut-item text-center">
                      <span class="shortcut-media avatar rounded-circle">
                          <img src="https://cdn.jsdelivr.net/npm/round-flag-icons/flags/ua.svg" alt="">
                        </span>
                        @if (session('locale') == 'uk')
                        <small class="font-weight-700">{{ __('main.langlist.current.ukrainian') }}</small>
                        @else
                        <small>{{ __('main.langlist.current.ukrainian') }} ({{ __('main.langlist.foreign.ukrainian') }})</small>
                        @endif
                  </a>
                </div>
              </div>
            </li>

          <li class="nav-item dropdown d-none">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-ungroup"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg  dropdown-menu-right  py-0 overflow-hidden">
              <div class="w-100 text-center mt-2">
                  <span class="h4 text-center text-dark w-100">Skróty</span>
              </div>
              <div class="row shortcuts px-4 py-2">
                <a href="\" class="col-4 my-2 shortcut-item text-center">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                    <i class="far fa-calendar-alt"></i>
                  </span>
                  <small>#</small>
                </a>
                <a href="\" class="col-4 my-2 shortcut-item text-center">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                    <small>#</small>
                  </a>
                <a href="" class="col-4 my-2 shortcut-item text-center">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                    <i class="fas fa-comments"></i>
                  </span>
                  <small>#</small>
                </a>
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="https://www.correggionet.eu/wp-content/uploads/2020/09/ukraine-flag-square-medium.jpg">
                </span>
                <div class="media-body  ml-2  d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu  dropdown-menu-right ">
              <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Witaj!</h6>
              </div>
              <a href="{{ route('s.profile') }}" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>{{ __('shop.topmenu.profile') }}</span>
              </a>
              <a href="{{ route('s.settings') }}" class="dropdown-item">
                <i class="fas fa-cog"></i>
                <span>{{ __('shop.sidemenu.other.settings') }}</span>
              </a>
              <!--<a href="#!" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>-->
              <div class="dropdown-divider"></div>
              <a href="" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                <span>{{ __('main.logout') }}</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>