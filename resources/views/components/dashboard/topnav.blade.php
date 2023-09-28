        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-xl fixed-top navbar-dark bg-success iq-navbar iq-dual-compact ">
            <div class="container-fluid navbar-inner">
                <div class="d-flex justify-content-between w-100 align-items-center">
                    <button data-trigger="navbar_main" class="d-xl-none btn btn-success rounded-pill p-1 pt-0 col-auto"
                        type="button">
                        <svg width="24px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                        </svg>
                    </button>

                    <h5 class="text-white">{{env('APP_NAME')}} Portal</h5>

                    <nav id="navbar_main"
                        class="mobile-offcanvas nav navbar navbar-expand-xl  horizontal-nav col-auto bg-dark">
                    
                    </nav>


                    <div class="col-auto">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <span class="navbar-toggler-bar bar1 mt-1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse  bg-dark" id="navbarSupportedContent">
                            <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-xl-0">
                                <li class="nav-item dropdown">
                                    <a class="py-0 nav-link d-flex align-items-center ps-3" style="background: #0c4926 !important" href="#"
                                        id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <img src="{{asset('homepage/logo-main.png')}}" alt="User-Profile"
                                            class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded"
                                            loading="lazy">
                                        <img src="{{asset('dashboarde/images/avatars/avtar_1.png')}}" alt="User-Profile"
                                            class="theme-color-purple-img img-fluid avatar avatar-50 avatar-rounded"
                                            loading="lazy">
                                        <img src="{{asset('dashboarde/images/avatars/avtar_2.png')}}" alt="User-Profile"
                                            class="theme-color-blue-img img-fluid avatar avatar-50 avatar-rounded"
                                            loading="lazy">
                                        <img src="{{asset('dashboarde/images/avatars/avtar_3.png')}}" alt="User-Profile"
                                            class="theme-color-green-img img-fluid avatar avatar-50 avatar-rounded"
                                            loading="lazy">
                                        <img src="{{asset('dashboarde/images/avatars/avtar_4.png')}}" alt="User-Profile"
                                            class="theme-color-yellow-img img-fluid avatar avatar-50 avatar-rounded"
                                            loading="lazy">
                                        <img src="{{asset('dashboarde/images/avatars/avtar_5.png')}}" alt="User-Profile"
                                            class="theme-color-pink-img img-fluid avatar avatar-50 avatar-rounded"
                                            loading="lazy">
                                        <div class="caption ms-3 d-none d-md-block ">
                                            <h6 class="mb-0 caption-title text-white text-capitalize">{{ Auth::user()->names }}</h6>
                                            <p class="mb-0 caption-sub-title text-capitalize">{{ Auth::getDefaultDriver() }}</p>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                        <li><a class="dropdown-item" href="/{{ Auth::getDefaultDriver() }}/logout">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>