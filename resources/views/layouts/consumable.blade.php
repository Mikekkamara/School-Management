@extends('layouts.app')
@section('content')
    <div class="consumable_container">
        <p class="consumable_title">
            new consumable record
            <a href="{{ url('/home/new_item') }}"><i class="hey fas fa-times"></i></a>
        </p>

        <form action="{{ url('/home/consumable') }}" method="post" id="consumable">
        @csrf
            <div class="proName">

                <label for="proName">product name</label>
                <input type="text" name="proName">
            </div>

            <div class="price">
                <label for="price">unit price</label>
                <input type="number" name="price" >
            </div>

            <div class="expDate">
                <label for="expDate">expiry date</label>
                <input type="date" name="expDate" >
            </div>

            <div class="delDate">
                <label for="delDate">delivery date</label>
                <input type="date" name="delDate" >
            </div>

            <div class="InitQuantity">
                <label for="InitQuantity">Quantity</label>
                <input type="number" name="InitQuantity" >
            </div>
        </form>
        <div class="success">

            {!! Session::has('msg') ? Session::get('msg') : ' ' !!}
        </div>
        <button class="consumables_submit" type="submit" onclick="event.preventDefault();document.getElementById('consumable').submit();">submit</button>
    </div>
@endsection
