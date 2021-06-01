@extends('layouts.app')
@section('content')
    <div class="reports_container">
        <p class="report_titles">permanent inventory report <a href="{{ url('/home/reports') }}"><i class="hey fas fa-times"></i></a></p>
        @if ($count == 0)
            <p class="stock">No products yet</p>
        @else

        <table>
            <tr>
                <th>product number</th>
                <th>product name</th>
                <th>quantity</th>
                <th>unit price</th>
                <th>purchase price</th>
                <th>condition</th>
            </tr>
            @foreach ($permanents as $permanent )
                <tr>
                    <td>{{ $permanent->productNumber }}</td>
                    <td>{{ $permanent->productName }}</td>
                    <td>{{ $permanent->quantity }}</td>
                    <td>{{ $permanent->unitPrice }}</td>
                    <td>{{ $permanent->purchasePrice }}</td>
                    <td>{{ $permanent->condition }}</td>
                </tr>
            @endforeach
        </table>
        @endif
    </div>
@endsection
