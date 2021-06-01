@extends('layouts.app')
@section('content')
    <p class="storemgmt_title">store options <a href="{{ url('/home') }}"><i class="hey fas fa-times"></i></a></p>
    <div class="storemgmt_container">

        <div class="reoder" >
            <img src="{{ asset('img/reorder.svg') }}" alt="Reorder Items">
            <p class="labels"><a href="{{ asset('/home/store/reorder') }}">items to be reodered</a> </p>
        </div>

        <div class="expiring" >
            <img src="{{ asset('img/expire.svg') }}" alt="Expiring Items">
            <p class="labels"><a href="{{ asset('/home/store/expire') }}">expiring items</a> </p>
        </div>

        <div class="issued" >
            <img src="{{ asset('img/issued.svg') }}" alt="Issued Items" >
            <p class="labels"><a href="">items issued</a> </p>
        </div>

        <div class="charge" >
            <img src="{{ asset('img/charge.svg') }}" alt="ChargeSheets" >
            <p class="labels"><a href="">chargesheets</a> </p>
        </div>


    </div>

    

@endsection
