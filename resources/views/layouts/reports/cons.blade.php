@extends('layouts.app')
@section('content')
    <div class="reportsContainer">
        <p class="report_titles">consumable inventory report <a href="{{ url('/home/reports') }}"><i class="fas fa-times"></i></a></p>
        @if ($count==0)
            <p class="stock">please register new items</p>
        @else
            <table>
                
                <tr>
                    <th>Product no.</th>
                    <th>product name</th>
                    <th>delivery date</th>
                    <th>expiry date</th>
                    <th>remaining qty</th>
                    <th>days to expiry</th>
                    <th>status</th>
                </tr>

                @foreach ($consumables as $consumable)
                    <tr>
                        <td>{{ $consumable->productNumber }}</td>
                        <td>{{ $consumable->productName }}</td>
                        <td>{{ $consumable->deliveryDate }}</td>
                        <td>{{ $consumable->expiryDate }}</td>
                        <td>{{ $consumable->remainingQuantity }}</td>
                        <td>{{ $consumable->life }}</td>
                        @if ($consumable->life == null)
                            <td></td>
                        @elseif ($consumable->life == 0)
                            <td>Expiring today</td>
                        @elseif ($consumable->life < 0)
                            <td>Expired</td>
                        @else
                            <td>Safe</td>


                        @endif
                    </tr>
                @endforeach
            </table>

        @endif
    </div>
@endsection
