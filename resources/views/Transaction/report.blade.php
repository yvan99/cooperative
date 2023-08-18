<!DOCTYPE html>
<html>
<head>
    <title>Transaction Report</title>
</head>
<body>
    <h1>Transaction Report</h1>
    <p>Year: {{ $year }}</p>
    @if ($month)
        <p>Month: {{ $month }}</p>
    @endif
    
    <table>
        <thead>
            <tr>
                <th>Code</th>
                <th>Date</th>
                <th>Amount</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->code }}</td>
                    <td>{{ $transaction->date }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>{{ $transaction->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
