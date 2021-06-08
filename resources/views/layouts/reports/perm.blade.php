@extends('layouts.app')
@section('content')
    <div class="reportsContainer">
        <p>permanent inventory report  <a href="{{ url('/home/reports') }}"><i class="fas fa-times"></i></a></p>
        @if ($count == 0)
            <span> no products yet</span>
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
