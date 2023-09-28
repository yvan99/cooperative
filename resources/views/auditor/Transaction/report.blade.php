<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        body {
            font-family: Helvetica;
            -webkit-font-smoothing: antialiased;
            padding: 0px !important;
            margin: 0px !important;
        }

        h2 {
            text-align: left;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: .7px;
            color: #324960;
            padding: 30px 0;
        }

        /* Table Styles */

        .table-wrapper {
            box-shadow: 0px 35px 50px rgba(0, 0, 0, 0.3);
        }

        .fl-table {
            border-radius: 10px !important;
            font-size: 12px;
            font-weight: normal;
            border: none;
            border-collapse: collapse;
            width: 100%;
            width: 100%;
            white-space: nowrap;
            background-color: white;
        }

        .fl-table td,
        .fl-table th {
            text-align: left;
            padding: 8px;
        }

        .fl-table td {
            border-right: 1px solid #f8f8f8;
            font-size: 12px;
        }

        .fl-table thead th {
            color: #ffffff;
            background: #324960;
        }

        .fl-table tr:nth-child(even) {
            background: #F8F8F8;
        }

        .button {
            border: none;
            color: white;
            padding: 7px 15px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 10px;
            border-radius: 5px !important;
        }

        .text-success {
            color: #367738;
        }

        /* Green */
        .text-info {
            color: #026687;
        }

        /* Blue */
        .text-danger {
            color: #95322b;
        }

        /* Red */
        .btn-light {
            background-color: #e7e7e7;
            color: black;
        }
    </style>
</head>

<body>
    <h2>Report of Transactions</h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Finance Category</th>
                    <th>Amount</th>
                    <th>Account</th>
                    <th>Document</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td><button class="button btn-light">{{ $transaction->code }}</button></td>
                        <td>{{ $transaction->financeCategory->name }}</td>
                        <td>{{ $transaction->amount }}</td>
                        <td>{{ $transaction->account ? $transaction->account->name : 'None' }}</td>
                        <td>{{ $transaction->document_type }}</td>
                        <td>
                            <p
                                class="
                            @if ($transaction->status === 'pending') text-info
                            @elseif ($transaction->status === 'approved') text-success
                            @elseif ($transaction->status === 'rejected') text-danger @endif
                        ">
                                {{ $transaction->status }}
                            </p>
                        </td>
                        <td>{{ $transaction->date }}</td>
                    </tr>
                @endforeach
            <tbody>
        </table>
    </div>
</body>

</html>
