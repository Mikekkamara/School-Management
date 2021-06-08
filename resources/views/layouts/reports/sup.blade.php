@extends('layouts.app')
@section('content')
    <div class="reportsContainer">
        <p>supplier's report  <a href="{{ url('/home/reports') }}"><i class="fas fa-times"></i></a></p>
        @if ($count==0)
            <span> no suppliers registered yet </span>
        @else

            <table>
                <tr>
                    <th>supplier number</th>
                    <th>company name</th>
                    <th>physical address</th>
                    <th>telephone number</th>
                </tr>

                @foreach ($suppliers as $supplier )
                    <tr>
                        <td>
                            {{ $supplier->supplierNumber }}
                        </td>
                        <td>
                            {{ $supplier->companyName }}
                        </td>
                        <td>
                            {{ $supplier->physicalAddress }}
                        </td>
                        <td>
                            {{ $supplier->telephoneNumber }}
                        </td>
                    </tr>
                @endforeach
            </table>

        @endif
    </div>
@endsection
