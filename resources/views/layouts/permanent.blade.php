@extends('layouts.app')
@section('content')
    <div class="permanent_container">
        <p class="permanent_title">new permanent record <a href=""><i class="hey fas fa-times"></i></a></p>

        <form action="{{ url('/home/permanent') }}" id="permanent" method="post">
        @csrf
        <div>
            <label for="pname">product name</label>
            <input type="text" name="pname" >
        </div>
        <div>
            <label for="unitPrice">unit price</label>
            <input type="number" name="unitPrice" >
        </div>
        <div>
            <label for="quantity">quantity</label>
            <input type="number" name="quantity">
        </div>
        <div>
            <label for="condition">condition</label>
            <select name="condition" >
                <option value="new">New</option>
                <option value="old">Old</option>
            </select>
        </div>
        </form>
        <div class="success">
            {!! Session::has('msg') ? Session::get('msg') : ' ' !!}
        </div>
        <button type="submit" class="permanent_submit" onclick="event.preventDefault();document.getElementById('permanent').submit();">submit</button>
    </div>
@endsection
