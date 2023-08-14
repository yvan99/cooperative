@include('components.dashboard.dashcss')

<body class="  dual-compact">
    <span class="screen-darken"></span>
    <main class="main-content">
        @include('components.dashboard.topnav')
        @include('owner.components.navbar')

        <div class="container-fluid content-inner pb-0" id="page_layout">
            <div class="d-flex justify-content-between align-items-center flex-wrap mb-5 gap-3">
                <div class="d-flex flex-column">
                    <h3>Dashboard</h3>
                    <p class="mb-0">Financial Dashboard</p>
                </div>
                <div class="d-flex justify-content-between align-items-center rounded flex-wrap gap-3">
                    <button type="button" class="btn btn-primary">Urujana Cooperative</button>
                </div>
            </div>
            <div class="row">

                <div class="col-12">
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
