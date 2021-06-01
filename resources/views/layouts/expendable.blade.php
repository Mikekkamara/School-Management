@extends('layouts.app')
@section('content')
    <div class="exp_container">
        <p class="exp_title">new expendable record <a href=""><i class="hey fas fa-times"></i></a></p>
        <form action="{{ url('/home/expendable') }}" id="expendable" method="post">
        @csrf
        <div>
            <label for="pname">product name</label>
            <input type="text" name="pname" >
        </div>

        <div>
            <label for="quantity">quantity</label>
            <input type="number" name="quantity">
        </div>

        </form>
        <div class="success">

            {!! Session::has('msg') ? Session::get('msg') : ' ' !!}
        </div>
        <button type="submit" class="exp_submit" onclick="event.preventDefault();document.getElementById('expendable').submit();">submit</button>
    </div>
@endsection
