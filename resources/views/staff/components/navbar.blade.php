<div class="nav-scroller bg-body shadow-sm">
    <div class="container-fluid">
        <nav class="nav nav-underline" aria-label="Secondary navigation">
            <ul class="iq-nav-menu list-unstyled flex-row">
                <li class="nav-item {{ Request::is('staff/dashboard') ? 'active' : '' }}"><a class="nav-link " href="/staff/dashboard">Manage Cooperatives</a>
                </li>
                <li class="nav-item {{ Request::is('staff/auditors') ? 'active' : '' }}"><a class="nav-link " href="/staff/auditors">Manage Auditors</a>
                </li>
                <li class="nav-item {{ Request::is('staff/logout') ? 'active' : '' }}"><a class="nav-link bg-danger text-white" href="/staff/logout">Logout</a>
                </li>
            </ul>
        </nav>
    </div>

</div> <!--Nav End-->
