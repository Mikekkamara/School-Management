@extends('layouts.app')
@section('content')
    <div class="reports_container">
        <p class="report_titles">expendable inventory report <a href="{{ url('/home/reports') }}"><i class="hey fas fa-times"></i></a></p>
        @if ($count == 0)
            <p class="stock">No products yet</p>
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
