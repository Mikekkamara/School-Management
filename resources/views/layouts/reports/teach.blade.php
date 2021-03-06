@extends('layouts.app')
@section('content')
    <div class="reportsContainer">
        <p>teacher's report  <a href="{{ url('/home/reports') }}"><i class="fas fa-times"></i></a></p>
        @if ($count==0)
            <span> no teachers registered yet </span>
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
                @endforeach
            </table>


        @endif
    </div>
@endsection
