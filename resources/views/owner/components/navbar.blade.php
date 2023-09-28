<div class="nav-scroller bg-body shadow-sm">
    <div class="container-fluid">
        <nav class="nav nav-underline" aria-label="Secondary navigation">
            {{-- {{ dd(Session::get('defaultCooperativeId')) }} --}}
            <ul class="iq-nav-menu list-unstyled flex-row">
                <li class="nav-item {{ Request::is('leader/dashboard') ? 'active' : '' }}"><a class="nav-link " href="/leader/dashboard">Dashboard</a>
                </li>
                <li class="nav-item {{ Request::is('leader/cooperatives') ? 'active' : '' }}"><a class="nav-link " href="/leader/cooperatives">Cooperatives</a>
                </li>
                <li class="nav-item {{ Request::is('leader/accounts') ? 'active' : '' }}"><a class="nav-link " href="/leader/accounts">Accounts</a>
                </li>

                <li class="nav-item {{ Request::is('leader/categories') ? 'active' : '' }}"><a class="nav-link " href="/leader/categories">Categories</a>
                </li>

                <li class="nav-item {{ Request::is('leader/transactions') ? 'active' : '' }}"><a class="nav-link " href="/leader/transactions">Transactions</a>
                </li>

                <li class="nav-item {{ Request::is('leader/audits') ? 'active' : '' }}"><a class="nav-link " href="/leader/audits">Financial Audit</a>
                </li>

                <li class="nav-item {{ Request::is('leader/logout') ? 'active' : '' }}"><a class="nav-link text-white bg-secondary" href="/leader/logout">Logout</a>
                </li>
            </ul>
        </nav>
    </div>

</div> <!--Nav End-->
