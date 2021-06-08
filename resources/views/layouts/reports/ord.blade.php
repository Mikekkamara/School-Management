@extends('layouts.app')
@section('content')
    <div class="reportsContainer">
        <p>order history report  <a href="{{ url('/home/reports') }}"><i class="fas fa-times"></i></a></p>
        @if ($count==0)
            <span> no orders yet </span>
        @else

        <table>
            <tr>
                <th>NO.</th>
                <th>company name</th>
                <th>order date</th>
                <th>required date</th>
                <th>product ordered</th>
                <th>quantity</th>
                <th>discount</th>
                <th>unit price</th>
                <th>total amount</th>
                <th>status</th>
            </tr>
            @foreach ($orders as $order )

            <tr>
                <td>{{ $order->orderNumber }}</td>
                <td>{{ $order->productName }}</td>
                <td>{{ $order->companyName }}</td>
                <td>{{ $order->orderDate }}</td>
                <td>{{ $order->requiredDate }}</td>
                <td>{{ $order->unitPrice }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->discount }}</td>
                <td>{{ $order->totalAmount }}</td>
                <td>{{ $order->status }}</td>
            </tr>
            @endforeach
        </table>
        @endif
    </div>
@endsection
