@include('components.dashboard.dashcss')

<body class="  dual-compact">
    <span class="screen-darken"></span>
    <main class="main-content">

        @include('components.dashboard.topnav')
        @include('auditor.components.navbar')

        <div class="container-fluid content-inner pb-0" id="page_layout">
            @include('auditor.components.breadcrumb')

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
                                                    <button type="button" class="btn btn-info default-cooperative-button" data-bs-toggle="modal" data-bs-target="#addCommentToCoops{{ $financialStat['cooperative']['id'] }}">
                                                        Add Comment
                                                    </button>
                                                    <div class="modal fade" id="addCommentToCoops{{ $financialStat['cooperative']['id'] }}" tabindex="-1" role="dialog" aria-labelledby="setDefaultCooperativeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="coopeLabel">Add Comment to {{ $financialStat['cooperative']['name'] }}</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('auditor.comment') }}" method="get">
                                                                        <input type="hidden" name="cooperativeId" value="{{ $financialStat['cooperative']['id'] }}">
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1">Example textarea</label>
                                                                            <textarea name="comment" class="form-control" id="coopComment" rows="3"></textarea>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary mt-3" id="saveCooperativeComment">Save</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
