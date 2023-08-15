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
                            <div class="header-title">
                                <h4 class="card-title">Cell Admins</h4>

                            </div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#createCategoryModal">
                                Register Cooperative
                            </button>


                        </div>
                        <div class="card-body">

                            @include('components.dashboard.alert')
                            <div class="table-responsive border rounded">

                                <table id="datatable" class="table" data-toggle="data-table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>



                                <div class="modal fade" id="createCategoryModal" tabindex="-1" role="dialog"
                                    aria-labelledby="createCategoryModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="createCategoryModalLabel">Register
                                                    Cooperative
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('cooperatives.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label class="mb-3" for="name">Cooperative Name</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="mb-3" for="certificate">Certificate (PDF)</label>
                                                        <input type="file" class="form-control" id="certificate"
                                                            name="certificate" accept=".pdf" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mb-3" for="category_id">Category</label>
                                                        <select class="form-control form-select" id="category_id" name="category_id"
                                                            required>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">
                                                                    {{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mb-3" for="currency">Currency</label>
                                                        <input type="text" class="form-control" id="currency"
                                                            name="currency" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mb-3" for="address">Address</label>
                                                        <input type="text" class="form-control" id="address"
                                                            name="address" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="mb-3" for="members">Members</label>
                                                        <input type="number" class="form-control" id="members"
                                                            name="members" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="mb-3" for="description">Description</label>
                                                        <textarea class="form-control" id="description" name="description" required></textarea>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary">Create</button>
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
