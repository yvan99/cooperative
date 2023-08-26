<div class="nav-scroller bg-body shadow-sm">
    <div class="container-fluid">
        <nav class="nav nav-underline" aria-label="Secondary navigation">
            {{-- {{ dd(Session::get('defaultCooperativeId')) }} --}}
            <ul class="iq-nav-menu list-unstyled flex-row">
                <li class="nav-item {{ Request::is('owner/dashboard') ? 'active' : '' }}"><a class="nav-link " href="/owner/dashboard">Dashboard</a>
                </li>
                <li class="nav-item {{ Request::is('owner/cooperatives') ? 'active' : '' }}"><a class="nav-link " href="/owner/cooperatives">Cooperatives</a>
                </li>
                <li class="nav-item {{ Request::is('owner/accounts') ? 'active' : '' }}"><a class="nav-link " href="/owner/accounts">Accounts</a>
                </li>

                <li class="nav-item {{ Request::is('owner/categories') ? 'active' : '' }}"><a class="nav-link " href="/owner/categories">Categories</a>
                </li>

                <li class="nav-item {{ Request::is('owner/transactions') ? 'active' : '' }}"><a class="nav-link " href="/owner/transactions">Transactions</a>
                </li>

                <li class="nav-item {{ Request::is('owner/audits') ? 'active' : '' }}"><a class="nav-link " href="/owner/audits">Financial Audit</a>
                </li>

                <li class="nav-item {{ Request::is('owner/logout') ? 'active' : '' }}"><a class="nav-link text-white bg-danger" href="/owner/logout">Logout</a>
                </li>
            </ul>
        </nav>
    </div>

</div> <!--Nav End-->
