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
                        <div class="card-header d-flex justify-content-between">

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerAuditorModal">
                                Register Auditor
                            </button>
                            
                        </div>
                        <div class="card-body">
                            @include('components.dashboard.alert')
                            <div class="table-responsive border rounded">

                                <table id="datatable" class="table" data-toggle="data-table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Telephone</th>
                                            <th>Created At</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($auditors as $auditor)
                                            <tr>
                                                <td>{{ $auditor->names }}</td>
                                                <td>{{ $auditor->email }}</td>
                                                <td>{{ $auditor->telephone }}</td>
                                                <td>{{ $auditor->created_at }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="modal fade" id="registerAuditorModal" tabindex="-1" role="dialog" aria-labelledby="registerAuditorModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="registerAuditorModalLabel">Register Auditor</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('staff.auditors.register') }}" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Name</label>
                                                        <input type="text" class="form-control" id="name" name="names" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="telephone" class="form-label">Telephone</label>
                                                        <input type="tel" class="form-control" id="telephone" name="telephone" required>
                                                    </div>
                                                    <!-- Add more fields as needed -->
                                                    <button type="submit" class="btn btn-primary">Register</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.dashboard.dashfooter')
    </main>
    @include('components.dashboard.dashjs')
