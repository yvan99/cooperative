@include('components.dashboard.dashcss')

<body class="  dual-compact">
    <span class="screen-darken"></span>
    <main class="main-content">

        @include('components.dashboard.topnav')
        @include('auditor.components.navbar')

        <div class="container-fluid content-inner pb-0" id="page_layout">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('auditor.transactions.reports') }}" method="get" target="_blank"
                                class="row">
                                <div class="col-md-2">
                                    <label for="year">Cooperative:</label>
                                    <select id="cooperative" class="form-control form-select" name="cooperative">
                                        <option value="">Select Cooperative</option>
                                        @foreach ($cooperatives as $coop)
                                            <option value="{{ $coop->id }}"> {{ $coop->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="year">Year:</label>
                                    <input type="number" id="year" class="form-control" name="year" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="month">Month:</label>
                                    <select id="month" class="form-control form-select" name="month">
                                        <option value="">Select Month</option>
                                        <option value="annually">Annually</option>
                                        @foreach (range(1, 12) as $month)
                                            <option value="{{ $month }}">
                                                {{ date('F', mktime(0, 0, 0, $month, 1)) }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-success mt-4">Generate Report</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            @include('components.dashboard.alert')
                            <div class="table-responsive border rounded">

                                <table id="datatable" class="table" data-toggle="data-table">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Cooperative</th>
                                            <th>Finance Category</th>
                                            <th>Amount</th>
                                            <th>Account</th>
                                            <th>Doc. Type</th>
                                            <th>Document</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $transaction)
                                            <tr>
                                                <td> <button
                                                        class="btn btn-sm btn-secondary text-white">{{ $transaction->code }}</button>
                                                </td>
                                                <td>{{ $transaction->cooperative->name }}</td>
                                                <td>{{ $transaction->financeCategory->name }}</td>
                                                <td>{{ $transaction->amount }}</td>
                                                <td>{{ $transaction->account ? $transaction->account->name : 'None' }}
                                                </td>
                                                <td>{{ $transaction->document_type }}</td>
                                                <td>
                                                    @if ($transaction->document_path)
                                                        <a href="{{ Storage::url($transaction->document_path) }}"
                                                            class="btn btn-success btn-sm" target="_blank">View
                                                            Document</a>
                                                    @else
                                                        No Document
                                                    @endif
                                                </td>
                                                <td>
                                                    <button
                                                        class="
                                                        @if ($transaction->status === 'pending') btn-sm btn btn-warning
                                                        @elseif ($transaction->status === 'approved') btn-sm btn btn-success
                                                        @elseif ($transaction->status === 'rejected') btn-sm btn btn-danger @endif
                                                    ">
                                                        {{ $transaction->status }}
                                                    </button>
                                                </td>
                                                <td>{{ $transaction->date }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="modal fade" id="createTransactionModal" tabindex="-1" role="dialog"
                                    aria-labelledby="createTransactionModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="createTransactionModalLabel">Register
                                                    Transaction</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('transactions.store') }}" class="row"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="finance_category_id">Finance
                                                            Category</label>
                                                        <select class="form-control form-select"
                                                            id="finance_category_id" name="finance_category_id"
                                                            required>
                                                            @foreach ($financeCategories as $financeCategory)
                                                                <option value="{{ $financeCategory->id }}">
                                                                    {{ $financeCategory->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="amount">Amount</label>
                                                        <input type="number" class="form-control" id="amount"
                                                            name="amount" required>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="account_id">Account</label>
                                                        <select class="form-control form-select" id="account_id"
                                                            name="account_id">

                                                            @foreach ($accounts as $account)
                                                                <option value="{{ $account->id }}">
                                                                    {{ $account->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label class="mb-3" for="description">Description</label>
                                                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                                    </div>
                                                    <input type="hidden" name="cooperative_id"
                                                        id="accountCooperativeId">

                                                    <div class="form-group col-12">
                                                        <button type="submit" class="btn btn-success">Create</button>
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
