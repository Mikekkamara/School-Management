@extends('layouts.app')
@section('content')
    <p class="reports_title">generate reports <a href="{{ url('/home') }}"><i class="hey fas fa-times"></i></a></p>
    <div class="report_container">

        <div class="sup_rep">
            <img src="{{ asset('img/supp_reports.svg') }}" alt=""> <br>
            <a href="{{ url('/home/reports/suppliers') }}"><span class="labels">suppliers</span></a>
        </div>
        <div class="stud_rep">
            <img src="{{ asset('img/students_reports.svg') }}" alt=""> <br>
            <a href="{{ url('/home/reports/students') }}"><span class="labels">students</span></a>
        </div>
        <div class="teacher_rep">
            <img src="{{ asset('img/teach_reports.svg') }}" alt=""> <br>
            <a href="{{ url('/home/reports/teachers') }}"><span class="labels">teachers</span></a>
        </div>
        <div class="orders_report">
            <img src="{{ asset('img/order_reports.svg') }}" alt=""> <br>
            <a href="{{ url('/home/reports/orders') }}"><span class="labels">orders</span></a>
        </div>
        <div class="exp_report">
            <img src="{{ asset('img/expe_reports.svg') }}" alt=""> <br>
            <a href="{{ url('/home/reports/expendable') }}"><span class="labels">expendable inventory</span></a>
        </div>
        <div class="perm_report">
            <img src="{{ asset('img/perm_reports.svg') }}" alt=""> <br>
            <a href="{{ url('/home/reports/permanent') }}"><span class="labels">permanent inventory</span></a>
        </div>
        <div class="cons_report">
            <img src="{{ asset('img/cons_reports.svg') }}" alt=""> <br>
            <a href="{{ url('/home/reports/consumable') }}"><span class="labels">consumable inventory</span></a>
        </div>

    </div>
@endsection
