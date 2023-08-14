@include('components.dashboard.dashcss')

<body class="  dual-compact">
    <span class="screen-darken"></span>
    <main class="main-content">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-xl fixed-top navbar-dark bg-dark iq-navbar iq-dual-compact ">
            <div class="container-fluid navbar-inner">
                <div class="d-flex justify-content-between w-100 align-items-center">
                    <button data-trigger="navbar_main" class="d-xl-none btn btn-primary rounded-pill p-1 pt-0 col-auto"
                        type="button">
                        <svg width="24px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                        </svg>
                    </button>
                    <div class="col-auto navbar-brand">
                        <a href="../dashboard/index.html" class="d-flex">

                            <!--Logo start-->
                            <div class="logo-main">
                                <div class="logo-normal">
                                    <svg class=" icon-30" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z"
                                            fill="currentColor" />
                                        <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z"
                                            fill="#3FF0B9" />
                                    </svg>
                                </div>
                                <div class="logo-mini">
                                    <svg class=" icon-30" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z"
                                            fill="currentColor" />
                                        <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z"
                                            fill="#3FF0B9" />
                                    </svg>
                                </div>
                            </div>
                            <!--logo End-->
                            <h4 class="logo-title d-none d-sm-block text-white" data-setting="app_name">Qompac UI</h4>
                        </a>
                    </div>
                    <nav id="navbar_main"
                        class="mobile-offcanvas nav navbar navbar-expand-xl  horizontal-nav col-auto bg-dark">
                        <div class="container-fluid">
                            <div class="offcanvas-header px-0">
                                <div class="navbar-brand ms-0">

                                    <!--Logo start-->
                                    <div class="logo-main">
                                        <div class="logo-normal">
                                            <svg class="text-primary icon-30" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z"
                                                    fill="currentColor" />
                                                <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z"
                                                    fill="#3FF0B9" />
                                            </svg>
                                        </div>
                                        <div class="logo-mini">
                                            <svg class="text-primary icon-30" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z"
                                                    fill="currentColor" />
                                                <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z"
                                                    fill="#3FF0B9" />
                                            </svg>
                                        </div>
                                    </div>
                                    <!--logo End-->
                                    <h4 class="logo-title" data-setting="app_name">Qompac UI</h4>
                                </div>
                                <button class="btn-close float-end text-white"></button>
                            </div>
                            <ul class="iq-nav-menu list-unstyled">
                                <li class="nav-item "><a class="nav-link " href="../dashboard/index-horizontal.html">
                                        Horizontal </a></li>
                                <li class="nav-item active"><a class="nav-link active"
                                        href="../dashboard/index-dual-compact.html"><span class="item-name">Dual
                                            Compact</span></a></li>
                                <li class="nav-item "><a class="nav-link " href="../dashboard/index-boxed.html">
                                        Boxed Horizontal </a></li>
                            </ul>
                        </div>
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
                                    <a href="#" class="nav-link" id="search-drop" data-bs-toggle="dropdown">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                fill="currentColor"></rect>
                                            <path
                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>
                                    <ul class="p-0 sub-drop dropdown-menu dropdown-menu-end"
                                        aria-labelledby="search-drop">
                                        <li class="">
                                            <div
                                                class="p-3 card-header justify-content-between border-bottom rounded-top">
                                                <div class="header-title">
                                                    <div class="iq-search-bar device-search  position-relative">
                                                        <form action="#" class="searchbox">
                                                            <input type="text"
                                                                class="text search-input form-control bg-soft-primary"
                                                                placeholder="Search here...">
                                                            <a class="d-lg-none d-flex" href="javascript:void(0);">
                                                                <span class="material-symbols-outlined">search</span>
                                                            </a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-0 card-body all-notification">
                                                <div
                                                    class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                                    <div class="flex-shrink-0">
                                                        <img src="../assets/images/avatars/01.png"
                                                            class="align-self-center img-fluid avatar-50 rounded-pill"
                                                            alt="#">
                                                    </div>
                                                    <div class="d-flex flex-column ms-3 w-100">
                                                        <a href="javascript:void(0);" class="h5">Paige Turner</a>
                                                        <span>Paige001</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                                    <div class="flex-shrink-0">
                                                        <img src="../assets/images/avatars/02.png"
                                                            class="align-self-center img-fluid avatar-50 rounded-pill"
                                                            alt="#">
                                                    </div>
                                                    <div class="d-flex flex-column ms-3 w-100">
                                                        <a href="javascript:void(0);" class="h5">Monty Carlo</a>
                                                        <span>Carlo.m</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center search-hover py-2 px-3 border-bottom">
                                                    <div class="flex-shrink-0">
                                                        <img src="../assets/images/avatars/03.png"
                                                            class="align-self-center img-fluid avatar-50 rounded-pill"
                                                            alt="#">
                                                    </div>
                                                    <div class="d-flex flex-column ms-3 w-100">
                                                        <a href="javascript:void(0);" class="h5">Paul Molive</a>
                                                        <span>Paul.45</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                                    <div class="flex-shrink-0">
                                                        <img src="../assets/images/avatars/04.png"
                                                            class="align-self-center img-fluid avatar-50 rounded-pill"
                                                            alt="#">
                                                    </div>
                                                    <div class="d-flex flex-column ms-3 w-100">
                                                        <a href="javascript:void(0);" class="h5">Monty Carlo</a>
                                                        <span>Carlo.m</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link" id="langues-drop" data-bs-toggle="dropdown">
                                        <svg class="icon-24" width="24" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802">
                                            </path>
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li data-setting="attribute">
                                            <div class="dropdown-item d-flex align-items-center">
                                                <input type="radio" value="ltr" class="btn-check"
                                                    name="theme_scheme_direction" data-prop="dir"
                                                    id="theme-scheme-direction-ltr" checked>
                                                <label class="d-block" for="theme-scheme-direction-ltr">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18.9702 19.757L15.3502 5.27201C15.1884 4.62224 14.8136 4.04541 14.2856 3.63359C13.7576 3.22177 13.1068 2.99871 12.4372 3.00001H11.5602C10.8911 2.99938 10.2411 3.22275 9.71368 3.63452C9.18629 4.04628 8.81191 4.62274 8.65022 5.27201L5.03022 19.757C4.9679 20.0135 5.00954 20.2843 5.14605 20.5102C5.28257 20.7362 5.50288 20.899 5.75895 20.9631C6.01502 21.0273 6.28606 20.9875 6.51297 20.8527C6.73988 20.7178 6.90424 20.4986 6.97022 20.243L8.28022 15H15.7202L17.0302 20.243C17.0962 20.4986 17.2606 20.7178 17.4875 20.8527C17.7144 20.9875 17.9854 21.0273 18.2415 20.9631C18.4976 20.899 18.7179 20.7362 18.8544 20.5102C18.9909 20.2843 19.0325 20.0135 18.9702 19.757V19.757ZM8.78022 13L10.5912 5.75801C10.6449 5.5414 10.7696 5.34903 10.9454 5.21163C11.1213 5.07423 11.3381 4.99972 11.5612 5.00001H12.4392C12.6624 4.99972 12.8792 5.07423 13.055 5.21163C13.2308 5.34903 13.3556 5.5414 13.4092 5.75801L15.2192 13H8.78022Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                    <span class="ms-2 mb-0"> LTR </span>
                                                </label>

                                            </div>
                                        </li>
                                        <li data-setting="attribute">
                                            <div class="dropdown-item d-flex align-items-center">
                                                <input type="radio" value="rtl" class="btn-check"
                                                    name="theme_scheme_direction" data-prop="dir"
                                                    id="theme-scheme-direction-rtl">
                                                <label class=" d-block" for="theme-scheme-direction-rtl">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12 4C10.08 4 8.5 5.58 8.5 7.5C8.5 8.43 8.88 9.28 9.5 9.91C7.97 10.91 7 12.62 7 14.5C7 17.53 9.47 20 12.5 20C14.26 20 16 19.54 17.5 18.66L16.5 16.93C15.28 17.63 13.9 18 12.5 18C10.56 18 9 16.45 9 14.5C8.99823 13.7298 9.2513 12.9806 9.71978 12.3692C10.1883 11.7578 10.8458 11.3186 11.59 11.12L16.8 9.72L16.28 7.79L11.83 9C11.08 8.9 10.5 8.28 10.5 7.5C10.5 6.66 11.16 6 12 6C12.26 6 12.5 6.07 12.75 6.2L13.75 4.47C13.22 4.16 12.61 4 12 4Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                    <span class="ms-2 mb-0"> RTL </span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link" id="notification-drop"
                                        data-bs-toggle="dropdown">
                                        <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z"
                                                fill="currentColor"></path>
                                            <path opacity="0.4"
                                                d="M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <span class="bg-danger dots"></span>
                                    </a>
                                    <ul class="p-0 sub-drop dropdown-menu dropdown-menu-end"
                                        aria-labelledby="notification-drop">
                                        <li class="">
                                            <div
                                                class="p-3 card-header d-flex justify-content-between bg-primary rounded-top">
                                                <div class="header-title">
                                                    <h5 class="mb-0 text-white">All Notifications</h5>
                                                </div>
                                            </div>
                                            <div class="p-0 card-body all-notification">
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                        <img class="p-1 avatar-40 rounded-pill bg-soft-primary"
                                                            src="../assets/images/shapes/01.png" alt=""
                                                            loading="lazy">
                                                        <div class="ms-3 w-100">
                                                            <h6 class="mb-0 ">Emma Watson Bni</h6>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <p class="mb-0">95 MB</p>
                                                                <small class="float-end font-size-12">Just Now</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <img class="p-1 avatar-40 rounded-pill bg-soft-primary"
                                                                src="../assets/images/shapes/02.png" alt=""
                                                                loading="lazy">
                                                        </div>
                                                        <div class="ms-3 w-100">
                                                            <h6 class="mb-0 ">New customer is join</h6>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <p class="mb-0">Cyst Bni</p>
                                                                <small class="float-end font-size-12">5 days
                                                                    ago</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                        <img class="p-1 avatar-40 rounded-pill bg-soft-primary"
                                                            src="../assets/images/shapes/03.png" alt=""
                                                            loading="lazy">
                                                        <div class="ms-3 w-100">
                                                            <h6 class="mb-0 ">Two customer is left</h6>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <p class="mb-0">Cyst Bni</p>
                                                                <small class="float-end font-size-12">2 days
                                                                    ago</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                        <img class="p-1 avatar-40 rounded-pill bg-soft-primary"
                                                            src="../assets/images/shapes/04.png" alt=""
                                                            loading="lazy">
                                                        <div class="w-100 ms-3">
                                                            <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <p class="mb-0">Cyst Bni</p>
                                                                <small class="float-end font-size-12">3 days
                                                                    ago</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item theme-scheme-dropdown">
                                    <a href="#" class="nav-link" id="mode-drop">
                                        <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>
                                    <ul class="list-unstyled dropdown-menu dropdown-content">
                                        <li data-setting="radio">
                                            <div class="dropdown-item d-flex align-items-center">
                                                <input type="radio" value="light" class="btn-check"
                                                    name="theme_scheme" id="color-mode-light">
                                                <label class="d-block" for="color-mode-light">
                                                    <svg class="icon-24" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                    <span class="ms-3 mb-0">Light</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li data-setting="radio">
                                            <div class="dropdown-item d-flex align-items-center">
                                                <input type="radio" value="dark" class="btn-check"
                                                    name="theme_scheme" id="color-mode-dark">
                                                <label class="d-block" for="color-mode-dark">
                                                    <svg class="icon-24" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                    <span class="ms-3 mb-0">Dark</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li data-setting="radio">
                                            <div class="dropdown-item d-flex align-items-center">
                                                <input type="radio" value="auto" class="btn-check"
                                                    name="theme_scheme" id="color-mode-auto" checked>
                                                <label class="d-block" for="color-mode-auto">
                                                    <svg class="icon-24" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                    <span class="ms-3 mb-0">Auto</span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item iq-full-screen d-none  d-xl-block border-end"
                                    id="fullscreen-item">
                                    <a href="#" class="nav-link pe-3" id="btnFullscreen"
                                        data-bs-toggle="dropdown">
                                        <span class="btn-inner">
                                            <svg class="normal-screen icon-24" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18.5528 5.99656L13.8595 10.8961" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M14.8016 5.97618L18.5524 5.99629L18.5176 9.96906"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M5.8574 18.896L10.5507 13.9964" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M9.60852 18.9164L5.85775 18.8963L5.89258 14.9235"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                            <svg class="full-normal-screen icon-32 d-none" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.7542 10.1932L18.1867 5.79319" stroke="white"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M17.2976 10.212L13.7547 10.1934L13.7871 6.62518"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M10.4224 13.5726L5.82149 18.1398" stroke="white"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M6.74391 13.5535L10.4209 13.5723L10.3867 17.2755"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="py-0 nav-link d-flex align-items-center ps-3" href="#"
                                        id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <img src="../assets/images/avatars/01.png" alt="User-Profile"
                                            class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded"
                                            loading="lazy">
                                        <img src="../assets/images/avatars/avtar_1.png" alt="User-Profile"
                                            class="theme-color-purple-img img-fluid avatar avatar-50 avatar-rounded"
                                            loading="lazy">
                                        <img src="../assets/images/avatars/avtar_2.png" alt="User-Profile"
                                            class="theme-color-blue-img img-fluid avatar avatar-50 avatar-rounded"
                                            loading="lazy">
                                        <img src="../assets/images/avatars/avtar_3.png" alt="User-Profile"
                                            class="theme-color-green-img img-fluid avatar avatar-50 avatar-rounded"
                                            loading="lazy">
                                        <img src="../assets/images/avatars/avtar_4.png" alt="User-Profile"
                                            class="theme-color-yellow-img img-fluid avatar avatar-50 avatar-rounded"
                                            loading="lazy">
                                        <img src="../assets/images/avatars/avtar_5.png" alt="User-Profile"
                                            class="theme-color-pink-img img-fluid avatar avatar-50 avatar-rounded"
                                            loading="lazy">
                                        <div class="caption ms-3 d-none d-md-block ">
                                            <h6 class="mb-0 caption-title text-white">Austin Robertson</h6>
                                            <p class="mb-0 caption-sub-title">Marketing Administrator</p>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item"
                                                href="../dashboard/app/user-profile.html">Profile</a></li>
                                        <li><a class="dropdown-item"
                                                href="../dashboard/app/user-privacy-setting.html">Privacy Setting</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="../dashboard/auth/sign-in.html">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="nav-scroller bg-body shadow-sm">
            <div class="container-fluid">
                <nav class="nav nav-underline" aria-label="Secondary navigation">
                    <ul class="iq-nav-menu list-unstyled flex-row">
                        <li class="nav-item active"><a class="nav-link "
                                href="../dashboard/index-dual-compact.html">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link "
                                href="../dashboard/analytics-dashboard.html">Analytics</a></li>
                        <li class="nav-item"><a class="nav-link "
                                href="../dashboard/ecommerce-dashboard.html">E-Commerce</a></li>
                        <li class="nav-item"><a class="nav-link "
                                href="../dashboard/crypto-dashboard.html">Crypto</a></li>
                    </ul>
                </nav>
            </div>

        </div> <!--Nav End-->
        <div class="container-fluid content-inner pb-0" id="page_layout">
            <div class="d-flex justify-content-between align-items-center flex-wrap mb-5 gap-3">
                <div class="d-flex flex-column">
                    <h3>Quick Insights</h3>
                    <p class="mb-0">Financial Dashboard</p>
                </div>
                <div class="d-flex justify-content-between align-items-center rounded flex-wrap gap-3">
                    <div class="form-group mb-0">
                        <select class="select2-basic-single js-states form-control" name="state"
                            style="width: 100%;">
                            <option>Past 30 Days</option>
                            <option>Past 60 Days</option>
                            <option>Past 90 Days</option>
                            <option>Past 1 year</option>
                            <option>Past 2 year</option>
                        </select>
                    </div>
                    <div class="form-group mb-0">
                        <input type="text" name="start"
                            class="form-control range_flatpicker flatpickr-input active"
                            placeholder="24 Jan 2022 to 23 Feb 2022" readonly="readonly">
                    </div>
                    <button type="button" class="btn btn-primary">Analytics</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-xl-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-block card-stretch card-height">
                                <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                                    <div class="header-title">
                                        <h4>Sales Stastics</h4>
                                    </div>
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <p class="mb-0"><svg class="text-primary" width="10"
                                                    height="10" viewBox="0 0 10 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="5" cy="5" r="5"
                                                        fill="currentColor" />
                                                </svg> Total Sales </p>
                                        </div>
                                        <div class="me-3">
                                            <p class="mb-0"><svg class="text-secondary" width="10"
                                                    height="10" viewBox="0 0 10 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="5" cy="5" r="5"
                                                        fill="currentColor" />
                                                </svg> Total Expense</p>
                                        </div>
                                        <div class="">
                                            <p class="mb-0"><svg class="text-tertiray" width="10"
                                                    height="10" viewBox="0 0 10 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="5" cy="5" r="5"
                                                        fill="currentColor" />
                                                </svg> Total Profit</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="sales-chart-02" class="sales-chart-02"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-title">
                                <h4 class=" card-title">Date</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="course-picker">
                                <input type="hidden" name="inline" class="d-none inline_flatpickr">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="mb-5">
                                <div class="mb-2 d-flex justify-content-between align-items-center">
                                    <span class="text-dark">Last Transaction</span>
                                    <a class="badge rounded-pill bg-soft-primary" href="javascript:void(0);">
                                        View Report
                                    </a>
                                </div>
                                <div class="">
                                    <h2 class="counter mb-2" style="visibility: visible;">$46,996</h2>
                                    <p>This Month</p>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex gap flex-column">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="bg-soft-primary avatar-60 rounded">
                                            <svg class="icon-35" width="35" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M21.9964 8.37513H17.7618C15.7911 8.37859 14.1947 9.93514 14.1911 11.8566C14.1884 13.7823 15.7867 15.3458 17.7618 15.3484H22V15.6543C22 19.0136 19.9636 21 16.5173 21H7.48356C4.03644 21 2 19.0136 2 15.6543V8.33786C2 4.97862 4.03644 3 7.48356 3H16.5138C19.96 3 21.9964 4.97862 21.9964 8.33786V8.37513ZM6.73956 8.36733H12.3796H12.3831H12.3902C12.8124 8.36559 13.1538 8.03019 13.152 7.61765C13.1502 7.20598 12.8053 6.87318 12.3831 6.87491H6.73956C6.32 6.87664 5.97956 7.20858 5.97778 7.61852C5.976 8.03019 6.31733 8.36559 6.73956 8.36733Z"
                                                    fill="currentColor"></path>
                                                <path opacity="0.4"
                                                    d="M16.0374 12.2966C16.2465 13.2478 17.0805 13.917 18.0326 13.8996H21.2825C21.6787 13.8996 22 13.5715 22 13.166V10.6344C21.9991 10.2297 21.6787 9.90077 21.2825 9.8999H17.9561C16.8731 9.90338 15.9983 10.8024 16 11.9102C16 12.0398 16.0128 12.1695 16.0374 12.2966Z"
                                                    fill="currentColor"></path>
                                                <circle cx="18" cy="11.8999" r="1"
                                                    fill="currentColor"></circle>
                                            </svg>
                                        </div>
                                        <div style="width: 100%;">
                                            <div class="d-flex justify-content-between  ">
                                                <h6 class="mb-2">Balance</h6>
                                                <h6 class="text-body">$2,386</h6>
                                            </div>
                                            <div class="progress bg-soft-primary shadow-none w-100"
                                                style="height: 6px">
                                                <div class="progress-bar bg-primary" data-toggle="progress-bar"
                                                    role="progressbar" aria-valuenow="23" aria-valuemin="0"
                                                    aria-valuemax="100"
                                                    style="width: 23%;transition: width 2s ease 0s;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="bg-soft-info avatar-60 rounded">
                                            <svg class="icon-35" width="35" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4"
                                                    d="M6.447 22C3.996 22 2 19.9698 2 17.4755V12.5144C2 10.0252 3.99 8 6.437 8L17.553 8C20.005 8 22 10.0302 22 12.5256V17.4846C22 19.9748 20.01 22 17.563 22H16.623H6.447Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M11.455 2.22103L8.54604 5.06682C8.24604 5.36094 8.24604 5.83427 8.54804 6.12742C8.85004 6.41959 9.33704 6.41862 9.63704 6.12547L11.23 4.56623V6.06119V14.4515C11.23 14.8654 11.575 15.2014 12 15.2014C12.426 15.2014 12.77 14.8654 12.77 14.4515V4.56623L14.363 6.12547C14.663 6.41862 15.15 6.41959 15.452 6.12742C15.603 5.98036 15.679 5.78849 15.679 5.59566C15.679 5.40477 15.603 5.21291 15.454 5.06682L12.546 2.22103C12.401 2.07981 12.205 1.99995 12 1.99995C11.796 1.99995 11.6 2.07981 11.455 2.22103Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                        <div style="width: 100%;">
                                            <div class="d-flex justify-content-between  ">
                                                <h6 class="mb-2">Transfer</h6>
                                                <h6 class="text-body">$4,765</h6>
                                            </div>
                                            <div class="progress bg-soft-info shadow-none w-100" style="height: 6px">
                                                <div class="progress-bar bg-info" data-toggle="progress-bar"
                                                    role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100"
                                                    style="width: 40%;transition: width 2s ease 0s;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="bg-soft-success avatar-60 rounded">
                                            <svg class="icon-35" width="35" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4"
                                                    d="M17.554 7.29614C20.005 7.29614 22 9.35594 22 11.8876V16.9199C22 19.4453 20.01 21.5 17.564 21.5L6.448 21.5C3.996 21.5 2 19.4412 2 16.9096V11.8773C2 9.35181 3.991 7.29614 6.438 7.29614H7.378L17.554 7.29614Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M12.5464 16.0374L15.4554 13.0695C15.7554 12.7627 15.7554 12.2691 15.4534 11.9634C15.1514 11.6587 14.6644 11.6597 14.3644 11.9654L12.7714 13.5905L12.7714 3.2821C12.7714 2.85042 12.4264 2.5 12.0004 2.5C11.5754 2.5 11.2314 2.85042 11.2314 3.2821L11.2314 13.5905L9.63742 11.9654C9.33742 11.6597 8.85043 11.6587 8.54843 11.9634C8.39743 12.1168 8.32142 12.3168 8.32142 12.518C8.32142 12.717 8.39743 12.9171 8.54643 13.0695L11.4554 16.0374C11.6004 16.1847 11.7964 16.268 12.0004 16.268C12.2054 16.268 12.4014 16.1847 12.5464 16.0374Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                        <div style="width: 100%;">
                                            <div class="d-flex justify-content-between  ">
                                                <h6 class="mb-2">Recived</h6>
                                                <h6 class="text-body">$8,224</h6>
                                            </div>
                                            <div class="progress bg-soft-success shadow-none w-100"
                                                style="height: 6px">
                                                <div class="progress-bar bg-success" data-toggle="progress-bar"
                                                    role="progressbar" aria-valuenow="82" aria-valuemin="0"
                                                    aria-valuemax="100"
                                                    style="width: 82%;transition: width 2s ease 0s;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="bg-soft-danger avatar-60 rounded">
                                            <svg class="icon-35" width="35" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M21.9964 8.37513H17.7618C15.7911 8.37859 14.1947 9.93514 14.1911 11.8566C14.1884 13.7823 15.7867 15.3458 17.7618 15.3484H22V15.6543C22 19.0136 19.9636 21 16.5173 21H7.48356C4.03644 21 2 19.0136 2 15.6543V8.33786C2 4.97862 4.03644 3 7.48356 3H16.5138C19.96 3 21.9964 4.97862 21.9964 8.33786V8.37513ZM6.73956 8.36733H12.3796H12.3831H12.3902C12.8124 8.36559 13.1538 8.03019 13.152 7.61765C13.1502 7.20598 12.8053 6.87318 12.3831 6.87491H6.73956C6.32 6.87664 5.97956 7.20858 5.97778 7.61852C5.976 8.03019 6.31733 8.36559 6.73956 8.36733Z"
                                                    fill="currentColor"></path>
                                                <path opacity="0.4"
                                                    d="M16.0374 12.2966C16.2465 13.2478 17.0805 13.917 18.0326 13.8996H21.2825C21.6787 13.8996 22 13.5715 22 13.166V10.6344C21.9991 10.2297 21.6787 9.90077 21.2825 9.8999H17.9561C16.8731 9.90338 15.9983 10.8024 16 11.9102C16 12.0398 16.0128 12.1695 16.0374 12.2966Z"
                                                    fill="currentColor"></path>
                                                <circle cx="18" cy="11.8999" r="1"
                                                    fill="currentColor"></circle>
                                            </svg>
                                        </div>
                                        <div style="width: 100%;">
                                            <div class="d-flex justify-content-between  ">
                                                <h6 class="mb-2">Outstanding</h6>
                                                <h6 class="text-body">$1,224</h6>
                                            </div>
                                            <div class="progress bg-soft-danger shadow-none w-100"
                                                style="height: 6px">
                                                <div class="progress-bar bg-danger" data-toggle="progress-bar"
                                                    role="progressbar" aria-valuenow="15" aria-valuemin="0"
                                                    aria-valuemax="100"
                                                    style="width: 10%;transition: width 2s ease 0s;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card card-block card-stretch card-height">
                        <div class="flex-wrap card-header d-flex justify-content-between border-0">
                            <div class="header-title">
                                <h4 class=" card-title">Sales Order</h4>
                            </div>
                            <div class="dropdown">
                                <span class="dropdown-toggle" id="dropdownMenuButton7" data-bs-toggle="dropdown"
                                    aria-expanded="false" role="button"> Monthly
                                </span>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton7">
                                    <a class="dropdown-item " href="javascript:void(0);">This Week</a>
                                    <a class="dropdown-item " href="javascript:void(0);">This Month</a>
                                    <a class="dropdown-item " href="javascript:void(0);">This Year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class=" table-responsive border rounded">
                                <table id="basic-table" class="table mb-0 table-striped" role="grid">
                                    <thead>
                                        <tr>
                                            <th>COMPANIES</th>
                                            <th>CONTACTS</th>
                                            <th>ORDER</th>
                                            <th>COMPLETION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                        src="../assets/images/shapes/01.png" alt="profile">
                                                    <h6>Addidis Sportwear</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="iq-media-group iq-media-group-1">
                                                    <a href="#" class="iq-media-1">
                                                        <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                    </a>
                                                    <a href="#" class="iq-media-1">
                                                        <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                    </a>
                                                    <a href="#" class="iq-media-1">
                                                        <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>$14,000</td>
                                            <td>
                                                <div class="mb-2 d-flex align-items-center">
                                                    <h6>60%</h6>
                                                </div>
                                                <div class="shadow-none progress bg-soft-primary w-100"
                                                    style="height: 4px">
                                                    <div class="progress-bar bg-primary" data-toggle="progress-bar"
                                                        role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                        src="../assets/images/shapes/05.png" alt="profile">
                                                    <h6>Netflixer Platforms</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="iq-media-group iq-media-group-1">
                                                    <a href="#" class="iq-media-1">
                                                        <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                    </a>
                                                    <a href="#" class="iq-media-1">
                                                        <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>$30,000</td>
                                            <td>
                                                <div class="mb-2 d-flex align-items-center">
                                                    <h6>25%</h6>
                                                </div>
                                                <div class="shadow-none progress bg-soft-primary w-100"
                                                    style="height: 4px">
                                                    <div class="progress-bar bg-primary" data-toggle="progress-bar"
                                                        role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                        src="../assets/images/shapes/02.png" alt="profile">
                                                    <h6>Shopifi Stores</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="iq-media-group iq-media-group-1">
                                                    <a href="#" class="iq-media-1">
                                                        <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                    </a>
                                                    <a href="#" class="iq-media-1">
                                                        <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>$8,500</td>
                                            <td>
                                                <div class="mb-2 d-flex align-items-center">
                                                    <h6>100%</h6>
                                                </div>
                                                <div class="shadow-none progress bg-soft-success w-100"
                                                    style="height: 4px">
                                                    <div class="progress-bar bg-success" data-toggle="progress-bar"
                                                        role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                        src="../assets/images/shapes/03.png" alt="profile">
                                                    <h6>Bootstrap Technologies</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="iq-media-group iq-media-group-1">
                                                    <a href="#" class="iq-media-1">
                                                        <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                    </a>
                                                    <a href="#" class="iq-media-1">
                                                        <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                    </a>
                                                    <a href="#" class="iq-media-1">
                                                        <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                    </a>
                                                    <a href="#" class="iq-media-1">
                                                        <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>$20,500</td>
                                            <td>
                                                <div class="mb-2 d-flex align-items-center">
                                                    <h6>100%</h6>
                                                </div>
                                                <div class="shadow-none progress bg-soft-success w-100"
                                                    style="height: 4px">
                                                    <div class="progress-bar bg-success" data-toggle="progress-bar"
                                                        role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                        src="../assets/images/shapes/04.png" alt="profile">
                                                    <h6>Community First</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="iq-media-group iq-media-group-1">
                                                    <a href="#" class="iq-media-1">
                                                        <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>$9,800</td>
                                            <td>
                                                <div class="mb-2 d-flex align-items-center">
                                                    <h6>75%</h6>
                                                </div>
                                                <div class="shadow-none progress bg-soft-primary w-100"
                                                    style="height: 4px">
                                                    <div class="progress-bar bg-primary" data-toggle="progress-bar"
                                                        role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-block card-stretch card-height">
                        <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                            <div class="header-title">
                                <h4>Sales Anylsis</h4>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton29"
                                    data-bs-toggle="dropdown" aria-expanded="false">All Tasks</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton29"
                                    style="">
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="sales-chart-04" class="sales-chart-04"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @include('components.dashboard.dashfooter')
    </main>
    @include('components.dashboard.dashjs')
