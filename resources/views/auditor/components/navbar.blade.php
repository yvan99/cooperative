<div class="nav-scroller bg-body shadow-sm">
    <div class="container-fluid">
        <nav class="nav nav-underline" aria-label="Secondary navigation">
            <ul class="iq-nav-menu list-unstyled flex-row">
                <li class="nav-item {{ Request::is('auditor/dashboard') ? 'active' : '' }}"><a class="nav-link " href="/auditor/dashboard">Dashboard</a>
                </li>
                <li class="nav-item {{ Request::is('auditor/transactions') ? 'active' : '' }}"><a class="nav-link " href="/auditor/transactions">Transactions</a>
                </li>
                <li class="nav-item {{ Request::is('auditor/audits') ? 'active' : '' }}"><a class="nav-link " href="/auditor/audits">Financial Audit</a>
                </li>
                <li class="nav-item {{ Request::is('auditor/logout') ? 'active' : '' }}"><a class="nav-link bg-danger text-white" href="/auditor/logout">Logout</a>
                </li>
            </ul>
        </nav>
    </div>

</div> <!--Nav End-->
