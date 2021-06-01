@extends('layouts.app')
@section('content')
    <p class="reorder_title">items to be rordered <a href="{{ url('/home/store') }}"><i class="hey fas fa-times"></i></a></p>
    <div class="reorder_container">

        @if ($count == 0)
            <p class="stock">all products in stock</p>
        @else
            <table class="reorder_table">
                <tr>
                    <th>product Number</th>
                    <th>product Name</th>
                    <th>remaining quantity</th>
                    <th>actions</th>
                </tr>

                @foreach ($items as $item )
                    <tr>
                        <td>{{ $item->productNumber }}</td>
                        <td>{{ $item->productName }}</td>
                        <td>{{ $item->remainingQuantity }}</td>
                        <td><a href="" class="rlinks">reorder</a> <br><a href="" class="rlinks">Ignore</a></td>
                    </tr>
                @endforeach
            </table>
        @endif

    </div>
@endsection
