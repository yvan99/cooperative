@include('components.dashboard.dashcss')

<body class="  dual-compact">
    <span class="screen-darken"></span>
    <main class="main-content">
        @include('components.dashboard.topnav')
        @include('owner.components.navbar')
        <div class="container-fluid content-inner pb-0" id="page_layout">
            @include('owner.components.breadcrumb')
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#createAccountModal">
                                Add an account
                            </button>
                        </div>
                        <div class="card-body">
                            @include('components.dashboard.alert')
                            <div class="table-responsive border rounded">

                                <table id="datatable" class="table" data-toggle="data-table">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Name</th>
                                            <th>Cooperative</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($accounts as $account)
                                            <tr>
                                                <td>{{ $account->code }}</td>
                                                <td>{{ $account->name }}</td>
                                                <td>{{ $account->cooperative->name }}</td>
                                                <td>{{ $account->description }}</td>
                                                <td>{{ $account->status }}</td>
                                                <td>{{ $account->amount }}</td>
                                                <td>{{ $account->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="modal fade" id="createAccountModal" tabindex="-1" role="dialog"
                                    aria-labelledby="createAccountModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="createAccountModalLabel">Create Account
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('accounts.store') }}" class="row"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="cooperative_id"
                                                        id="accountCooperativeId">
                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="name">Account Name</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" required>
                                                    </div>

                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="status">Status</label>
                                                        <select class="form-control form-select" id="status"
                                                            name="status" required>
                                                            <option value="active">Active</option>
                                                            <option value="inactive">Inactive</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="amount">Amount</label>
                                                        <input type="number" class="form-control" id="amount"
                                                            name="amount" required>
                                                    </div>

                                                    <div class="form-group col-12">
                                                        <label class="mb-3" for="description">Description</label>
                                                        <textarea class="form-control" id="description" name="description" required></textarea>
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <button type="submit" class="btn btn-primary">Create
                                                        </button>
                                                    </div>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cooperativeIdInput = document.getElementById('accountCooperativeId');

            // Get the selected cooperative ID from localStorage and populate the hidden input
            const storedCooperativeId = localStorage.getItem('defaultCooperativeId');
            if (cooperativeIdInput && storedCooperativeId) {
                cooperativeIdInput.value = storedCooperativeId;
            }
        });
    </script>
