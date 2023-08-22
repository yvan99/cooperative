@include('components.dashboard.dashcss')

<body class="  dual-compact">
    <span class="screen-darken"></span>
    <main class="main-content">
        @include('components.dashboard.topnav')
        @include('staff.components.navbar')
        <div class="container-fluid content-inner pb-0" id="page_layout">
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
                                            <th>Created At</th>
                                            <th>Certificate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cooperatives as $cooperative)
                                            <tr>
                                                <td>{{ $cooperative->name }}</td>
                                                <td>{{ $cooperative->category->name }}</td>
                                                <td>{{ $cooperative->currency }}</td>
                                                <td>{{ $cooperative->address }}</td>
                                                <td><button
                                                        class="
                                                    @if ($cooperative->status === 'pending') btn-sm btn btn-warning
                                                    @elseif ($cooperative->status === 'cancelled')
                                                        btn-sm btn btn-danger
                                                    @elseif ($cooperative->status === 'approved')
                                                        btn-sm btn btn-success @endif
                                                ">
                                                        {{ $cooperative->status }}
                                                    </button></td>
                                                <td>{{ $cooperative->members }}</td>
                                                <td>{{ $cooperative->created_at }}</td>
                                                <td>
                                                    @if ($cooperative->certificate)
                                                        <a href="{{ Storage::url($cooperative->certificate) }}"
                                                            class="btn btn-primary btn-sm" target="_blank">Download
                                                            Certificate</a>
                                                    @else
                                                        No Certificate
                                                    @endif
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
    @include('components.dashboard.dashjs')
