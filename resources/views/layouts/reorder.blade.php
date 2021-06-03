@extends('layouts.app')
@section('content')

        <div class="tableContainer">
            <p>items to reorder <a href="{{ route('storeOptions') }}"><i class="fas fa-times"></i></a></p>
            @if ($count == 0)
                <span> all products in stock </span>
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
