@extends('layouts.app')
@section('content')

        <div class="reorderContainer">

            @if ($count == 0)
                <p class="stock">all products in stock</p>
            @else
                <table>
                    <tr>
                        <th>product Number</th>
                        <th>product Name</th>
                        <th>remaining quantity</th>
                    </tr>

                    @foreach ($items as $item )
                        <tr>
                            <td>{{ $item->productNumber }}</td>
                            <td>{{ $item->productName }}</td>
                            <td>{{ $item->remainingQuantity }}</td>
                        </tr>
                    @endforeach
                </table>
            @endif

        </div>
@endsection
