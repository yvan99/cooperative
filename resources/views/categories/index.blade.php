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
                                data-bs-target="#createFinanceCategoryModal">
                                Add Category
                            </button>
                        </div>
                        <div class="card-body">
                            @include('components.dashboard.alert')
                            <div class="table-responsive border rounded">

                                <table id="datatable" class="table" data-toggle="data-table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Cooperative</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($financeCategories as $financeCategory)
                                            <tr>
                                                <td><button
                                                        class="btn btn-sm btn-secondary text-white">{{ $financeCategory->code }}</button>
                                                </td>
                                                <td>{{ $financeCategory->name }}</td>
                                                <td>{{ $financeCategory->type }}</td>
                                                <td>{{ $financeCategory->status }}</td>
                                                <td>{{ $financeCategory->cooperative->name }}</td>
                                                <td>{{ $financeCategory->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                                <div class="modal fade" id="createFinanceCategoryModal" tabindex="-1" role="dialog"
                                    aria-labelledby="createFinanceCategoryModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="createFinanceCategoryModalLabel">Register
                                                    Finance Category</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('categories.store') }}" class="row"
                                                    method="POST">
                                                    @csrf
                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="name">Category Name</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" required>
                                                    </div>

                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="type">Category Type</label>
                                                        <select class="form-control form-select" id="type" name="type"
                                                            required>
                                                            <option value="income">Income</option>
                                                            <option value="expense">Expense</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="status">Status</label>
                                                        <select class="form-control form-select" id="status" name="status"
                                                            required>
                                                            <option value="active">Active</option>
                                                            <option value="inactive">Inactive</option>
                                                        </select>
                                                    </div>
                                                    <input type="hidden" name="cooperative_id"
                                                        id="accountCooperativeId">

                                                    <div class="form-group col-12">
                                                        <button type="submit" class="btn btn-primary">Create</button>
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
