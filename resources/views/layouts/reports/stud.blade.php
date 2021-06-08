@extends('layouts.app')
@section('content')
    <div class="reportsContainer">
        <p>student's report  <a href="{{ url('/home/reports') }}"><i class="fas fa-times"></i></a></p>
        @if ($count==0)
            <span> no students registered yet </span>
        @else

            <table>
                <tr>
                    <th>NO.</th>
                    <th>student name</th>
                    <th>class</th>
                    <th>house</th>
                </tr>
                @foreach ($students as $student )

                <tr>
                    <td>{{ $student->admissionNumber }}</td>
                    <td>{{ $student->studentName }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->house }}</td>
                </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection
