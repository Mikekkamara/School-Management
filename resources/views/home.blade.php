@extends('layouts.app')
@section('content')

    <section class="homeContainer">
        <a href="{{ url('/home/category/updates') }}" class="dailyUpdates">
            <img src="{{ asset('img/undraw_add_friends_re_3xte.svg') }}" alt="">
            <p>daily updates</p>
        </a>
        <a href="{{ url('/home/new_user') }}" class="newUser">
            <img src="{{ asset('img/new.svg') }}" alt="">
            <p>new user</p>
        </a>
        <a href="" class="newItem">
            <img src="{{ asset('img/newEnt.svg') }}" alt="">
            <p>new item</p>
        </a>
        <a href="" class="placeOrder">
            <img src="{{ asset('img/order.svg') }}" alt="">
            <p>place order</p>
        </a>
        <a href="" class="manageStore">
            <img src="{{ asset('img/manage.svg') }}" alt="">
            <p>manage store</p>
        </a>
        <a href="" class="reports">
            <img src="{{ asset('img/reports.svg') }}" alt="">
            <p>reports</p>
        </a>
        <a href="" class="requestItem">
            <img src="{{ asset('img/process.svg') }}" alt="">
            <p>request an item</p>
        </a>
        <a href="" class="payments">
            <img src="{{ asset('img/undraw_printing_invoices_5r4r.svg') }}" alt="">
            <p>payments</p>
        </a>
    </section>

@endsection





