@extends('layouts.app')
@section('content')
<div class="profileContainer">
    <div class="profileimageContainer">
        <img src="{{ asset('img/male.svg') }}" alt=""> <br>
        <label for="profilePicture">
            <input type="file">
            Edit
        </label><br>


    </div>
    <label for="name">name: </label> {{ Auth::user()->name }} <br>
    <label for="gender">gender:</label>
    <select name="gender" id="">
        <option value=""></option>
        <option value="male">Male</option>
        <option value="female">female</option>
    </select>
</div>
@endsection
