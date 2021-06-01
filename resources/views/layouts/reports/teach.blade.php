@extends('layouts.app')
@section('content')
    <div class="reports_container">
        <p class="report_titles">teacher's report <a href="{{ url('/home/reports') }}"><i class="hey fas fa-times"></i></a></p>
        @if ($count==0)
            <p class="stock">No registered teacher</p>
        @else

        <table>
            <tr>
                <th>ID no</th>
                <th>teacher name</th>
                <th>address</th>
                <th>mobile number</th>
            </tr>
            @foreach ($teachers as $teacher )
                <tr>
                    <td>{{ $teacher->idNumber }}</td>
                    <td>{{ $teacher->teacherName }}</td>
                    <td>{{ $teacher->address }}</td>
                    <td>{{ $teacher->mobNumber }}</td>
                </tr>
            </table>
            @endforeach


        @endif
    </div>
@endsection
