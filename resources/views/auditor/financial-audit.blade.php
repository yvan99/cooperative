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
                            <form action="{{ route('auditor.financial.audits') }}" method="get" class="row">
                                <div class="col-md-2">
                                    <label for="year">Cooperative:</label>
                                    <select id="cooperativeId" class="form-control form-select" name="cooperativeId">
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
                                            <option value="{{ $month }}"> {{ date('F', mktime(0, 0, 0, $month, 1)) }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-success mt-4">Review Audits</button>
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
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $transaction)
                                            <tr>
                                                <td> <button class="btn btn-sm btn-secondary text-white">{{ $transaction->code }}</button></td>
                                                <td>{{ $transaction->cooperative->name }}</td>
                                                <td>{{ $transaction->financeCategory->name }}</td>
                                                <td>{{ $transaction->amount }}</td>
                                                <td>{{ $transaction->account ? $transaction->account->name : 'None' }}
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
                                                        <button type="submit" class="btn btn-primary">Create</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="">
                                <div class="row mt-3">
                                    <div class="col-xl-3 col-sm-6 col-12">
                                        <div class="card shadow-none border border-1 ml-2">
                                          <div class="card-content">
                                            <div class="card-body">
                                              <div class="media d-flex justify-content-between">
                                                <div class="media-body text-left" style="text-align: left">
                                                  <h3>{{ number_format($transactionAudit['totalIncome'], 2) }}</h3>
                                                  <span>Total Income</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12">
                                        <div class="card shadow-none border border-1">
                                          <div class="card-content">
                                            <div class="card-body">
                                              <div class="media d-flex justify-content-between">
                                                <div class="media-body text-left" style="text-align: left">
                                                  <h3> {{ number_format($transactionAudit['totalExpenses'], 2) }}</h3>
                                                  <span>Total Expences</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <button type="button" class="btn btn-success default-cooperative-button" data-bs-toggle="modal" data-bs-target="#addCommentToCoops">
                                        Make audit review
                                    </button>
                                    <div class="modal fade" id="addCommentToCoops" tabindex="-1" role="dialog" aria-labelledby="setDefaultCooperativeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="coopeLabel">Add Comment</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('auditor.comment') }}" method="get">
                                                        <input type="hidden" name="cooperativeId" value="{{ $cooperativeId }}">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Write your comment</label>
                                                            <textarea name="comment" class="form-control" id="coopComment" rows="3"></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary mt-3" id="saveCooperativeComment">Save</button>
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
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Set default cooperative on button click
                let saveComment = document.getElementById('saveCooperativeComment');

                console.log(this)

                saveComment.addEventListener('click', function() {
                    const coopId = this.getAttribute('activeCoop');

                    if (coopId) {
                        const coopComment = document.getElementById('coopComment').value;

                        fetch('/auditor/add/comment', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            },
                            body: JSON.stringify({
                                coopId
                                coopComment
                            }),
                        }).then(response => response.json())
                    } else {
                        alert('Adding Comment Failed');
                    }
                });
            });
        </script>

        @include('components.dashboard.dashfooter')
    </main>
    @include('components.dashboard.dashjs')
