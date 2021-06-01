@extends('layouts.app')
@section('content')
    <div class="expendableContainer">
        <x-new-item/>
        <div class="formContainer">
            <p>new item</p>
            <form action="" method="post">
                <label for="productName">product name</label> <br>
                <input type="text" name="productName"> <br>

                <label for="quantity">quantity</label> <br>
                <input type="number" name="quantity"> <br>

                <button type="submit">submit</button>
                <h6>{!! Session::has('msg') ? Session::get('msg') : ' ' !!}</h6>
            </form>
        </div>
    </div>
@endsection
