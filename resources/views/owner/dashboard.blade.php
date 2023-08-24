@extends('Layouts.dashboard')
@section('main-content')
<span class="screen-darken"></span>
<main class="main-content">
    @include('components.dashboard.topnav')
    @include('owner.components.navbar')

    <div class="container-fluid content-inner pb-0" id="page_layout">
        @include('owner.components.breadcrumb')

        <div class="row">
            <div class="col-lg-8 col-xl-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <datatable-chart :entries="{{ $analytics->get('transactions') }}" title="Transactions Histogram" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <pie-chart title="Transaction Based on Categories" :entries="{{ $analytics->get('categories') }}" />
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <pie-chart title="Income vs Expense" :entries="{{ $analytics->get('incone_vs_expences') }}" />
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('components.dashboard.dashfooter')
</main>
@endsection
