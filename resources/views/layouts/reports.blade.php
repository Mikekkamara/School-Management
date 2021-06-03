@extends('layouts.app')
@section('content')
    <div class="reportContainer">
        <a href="{{ url('/home/reports/suppliers') }}">
            <img src="{{ asset('img/supp_reports.svg') }}" alt=""> <br>
            suppliers
        </a>
        <a href="{{ url('/home/reports/students') }}">
            <img src="{{ asset('img/students_reports.svg') }}" alt=""> <br>
            students
        </a>
        <a href="{{ url('/home/reports/teachers') }}">
            <img src="{{ asset('img/teach_reports.svg') }}" alt=""> <br>
            teachers
        </a>
        <a href="{{ url('/home/reports/orders') }}">
            <img src="{{ asset('img/order_reports.svg') }}" alt=""> <br>
            orders
        </a>
        <a href="{{ url('/home/reports/expendable') }}">
            <img src="{{ asset('img/expe_reports.svg') }}" alt=""> <br>
            expendable <br> inventory
        </a>
        <a href="{{ url('/home/reports/permanent') }}">
            <img src="{{ asset('img/perm_reports.svg') }}" alt=""> <br>
            permanent <br> inventory
        </a>
        <a href="{{ url('/home/reports/consumable') }}">
            <img src="{{ asset('img/cons_reports.svg') }}" alt=""> <br>
            consumable <br> inventory
        </a>
    </div>
@endsection

