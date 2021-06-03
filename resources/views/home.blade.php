@extends('layouts.app')
@section('content')

    <section class="homeContainer">
        <a href="{{ url('/home/category/updates') }}">
            <img src="{{ asset('img/undraw_add_friends_re_3xte.svg') }}" alt="">
            <p>daily updates</p>
        </a>

        @if (Auth::user()->type == "administrator")
            <a href="{{ url('/home/new_user') }}">
                <img src="{{ asset('img/new.svg') }}" alt="">
                <p>new user</p>
            </a>
            <a href="{{ route('storeOptions') }}" >
                <img src="{{ asset('img/manage.svg') }}" alt="">
                <p>manage store</p>
            </a>
        @endif
        <a href="{{ route('new_item') }}">
            <img src="{{ asset('img/newEnt.svg') }}" alt="">
            <p>new item</p>
        </a>
        <a href="{{ route('order') }}">
            <img src="{{ asset('img/order.svg') }}" alt="">
            <p>place order</p>
        </a>

        <a href="{{ route('reports') }}" >
            <img src="{{ asset('img/reports.svg') }}" alt="">
            <p>reports</p>
        </a>
        <a href="" >
            <img src="{{ asset('img/process.svg') }}" alt="">
            <p>request an item</p>
        </a>
        <a href="" >
            <img src="{{ asset('img/undraw_printing_invoices_5r4r.svg') }}" alt="">
            <p>payments</p>
        </a>
    </section>

@endsection





