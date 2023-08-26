@extends('Layouts.dashboard')
@section('main-content')
<span class="screen-darken"></span>
<main class="main-content">

    @include('components.dashboard.topnav')
    @include('owner.components.navbar')

    <div class="container-fluid content-inner pb-0" id="page_layout">
        @include('owner.components.breadcrumb')

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('components.dashboard.alert')

                        <div class="table-responsive border rounded">
                            <table id="datatable" class="table" data-toggle="data-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Currency</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th>Members</th>
                                        <th>Certificate</th>
                                        <th>Income</th>
                                        <th>Expence</th>
                                        <th>Financial Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($finStats as $key => $financialStat)
                                        <tr>
                                            <td>{{ $financialStat['cooperative']['name'] }}</td>
                                            <td>{{ $financialStat['cooperative']['category']['name'] }}</td>
                                            <td>{{ $financialStat['cooperative']['currency'] }}</td>
                                            <td>{{ $financialStat['cooperative']['address'] }}</td>
                                            <td><button
                                                    class="
                                                @if ($financialStat['cooperative']['status'] === 'pending') btn-sm btn btn-warning
                                                @elseif ($financialStat['cooperative']['status'] === 'cancelled')
                                                    btn-sm btn btn-danger
                                                @elseif ($financialStat['cooperative']['status'] === 'approved')
                                                    btn-sm btn btn-success @endif
                                            ">
                                                    {{ $financialStat['cooperative']['status'] }}
                                                </button></td>
                                            <td>{{ $financialStat['cooperative']['members'] }}</td>
                                            <td>
                                                @if ($financialStat['cooperative']['certificate'])
                                                    <a href="{{ Storage::url($financialStat['cooperative']['certificate']) }}"
                                                        class="btn btn-primary btn-sm" target="_blank">Download
                                                        Certificate</a>
                                                @else
                                                    No Certificate
                                                @endif
                                            </td>
                                            <td>{{ $financialStat['totalIncome'] }}</td>
                                            <td>{{ $financialStat['totalExpenses'] }}</td>
                                            <td>
                                                <button class="@if ($financialStat['financialStatus'] === 'Profile') btn-sm btn btn-success @else btn-sm btn btn-warning @endif">
                                                    Has {{ $financialStat['financialStatus'] }}
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('components.dashboard.dashfooter')
</main>
@endsection

