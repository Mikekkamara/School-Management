@extends('layouts.app')
@section('content')
    <div class="reports_container">
        <p class="report_titles">supplier report <a href="{{ url('/home/reports') }}"><i class="hey fas fa-times"></i></a></p>
        @if ($count==0)
            <p class="stock">no supplier registered</p>
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
