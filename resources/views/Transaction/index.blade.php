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
                                data-bs-target="#createTransactionModal">
                                Add transaction
                            </button>
                        </div>
                        <div class="card-body">
                            @include('components.dashboard.alert')
                            <div class="table-responsive border rounded">

                                <table id="datatable" class="table" data-toggle="data-table">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Finance Category</th>
                                            <th>Cooperative</th>
                                            <th>Amount</th>
                                            <th>Account</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $transaction)
                                            <tr>
                                                <td>{{ $transaction->code }}</td>
                                                <td>{{ $transaction->financeCategory->name }}</td>
                                                <td>{{ $transaction->cooperative->name }}</td>
                                                <td>{{ $transaction->amount }}</td>
                                                <td>{{ $transaction->account ? $transaction->account->name : 'None' }}</td>
                                                <td>{{ $transaction->description }}</td>
                                                <td>
                                                    <button class="
                                                        @if ($transaction->status === 'pending') btn-sm btn btn-warning
                                                        @elseif ($transaction->status === 'approved') btn-sm btn btn-success
                                                        @elseif ($transaction->status === 'rejected') btn-sm btn btn-danger
                                                        @endif
                                                    ">
                                                        {{ $transaction->status }}
                                                    </button>
                                                </td>
                                                <td>{{ $transaction->date }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                                <div class="modal fade" id="createTransactionModal" tabindex="-1" role="dialog" aria-labelledby="createTransactionModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="createTransactionModalLabel">Register Transaction</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('transactions.store') }}" class="row" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="code">Transaction Code</label>
                                                        <input type="text" class="form-control" id="code" name="code" required>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="finance_category_id">Finance Category</label>
                                                        <select class="form-control form-select" id="finance_category_id" name="finance_category_id" required>
                                                            @foreach ($financeCategories as $financeCategory)
                                                                <option value="{{ $financeCategory->id }}">{{ $financeCategory->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="cooperative_id">Cooperative</label>
                                                        <select class="form-control form-select" id="cooperative_id" name="cooperative_id" required>
                                                            @foreach ($cooperatives as $cooperative)
                                                                <option value="{{ $cooperative->id }}">{{ $cooperative->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="amount">Amount</label>
                                                        <input type="number" class="form-control" id="amount" name="amount" required>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="account_id">Account</label>
                                                        <select class="form-control form-select" id="account_id" name="account_id">
                                                            <option value="" selected>None</option>
                                                            @foreach ($accounts as $account)
                                                                <option value="{{ $account->id }}">{{ $account->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label class="mb-3" for="description">Description</label>
                                                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label class="mb-3" for="document">Document (PDF)</label>
                                                        <input type="file" class="form-control" id="document" name="document" accept=".pdf">
                                                    </div>
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

