@extends('layouts.app')
@section('content')
<div class="order_container">
        {{-- {!! Session::has('msg') ? Session::get('msg') : ' ' !!} --}}
        <p class="new_order_title">New Order  <a href="{{ url('/home') }}"><i class="hey fas fa-times"></i></a></p>
        <div class="success">

            {!! Session::has('msg') ? Session::get('msg') : ' ' !!}
        </div>
        <form action="{{ url('/home/placeOrder') }}" class="form_order" id="form_order" method="POST">
            @csrf
            <div class="pname">
                <label for="productName">product name</label><br>
                <input type="text" name="productName"  id="productName">
            </div>
            <div class="cname">
                <label for="companyName">company name</label><br>
                <input type="text" name="companyName" id="companyName">
            </div>

            <div class="rdate">
                <label for="requiredDate">Required date</label><br>
                <input type="date" name="requiredDate" id="requiredDate">
            </div>
            <div class="uprice">
                <label for="unitPrice">unit price</label><br>
                <input type="number" name="unitPrice" id="unitPrice">
            </div>
            <div class="qty">
                <label for="quantity">quantity</label><br>
                <input type="number" name="quantity" id="quantity">
            </div>
            <div class="discount">
                <label for="discount">discount</label><br>
                <input type="number" name="discount" id="discount">
            </div>
        </form>
        

            <button type="submit" class="btn_order" onclick="event.preventDefault();document.getElementById('form_order').submit();">submit</button>

    </div>
@endsection
