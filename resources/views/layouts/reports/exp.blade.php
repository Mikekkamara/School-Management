@extends('layouts.app')
@section('content')
    <div class="reportsContainer">
        <p>teacher's report  <a href="{{ url('/home/reports') }}"><i class="fas fa-times"></i></a></p>
        @if ($count == 0)
            <span> no products yet </span>
        @else
            <table>
                <tr>
                    <th>product number</th>
                    <th>product name</th>
                    <th>quantity</th>
                </tr>
                @foreach ($expendables as $expendable )
                    <tr>
                        <td>{{ $expendable->productNumber }}</td>
                        <td>{{ $expendable->productName }}</td>
                        <td>{{ $expendable->quantity }}</td>
                    </tr>
                @endforeach

            </table>
        @endif

    </div>
@endsection
