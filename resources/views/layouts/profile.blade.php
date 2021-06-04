@extends('layouts.app')
@section('content')
<div class="profileContainer">
    <div class="profileimageContainer">
        @if (Auth::user()->gender == 'male')
            <img src="{{ asset('img/male.svg') }}" alt=""> <br>
        @else
            <img src="{{ asset('img/female.svg') }}" alt=""> <br>
        @endif
        <label for="profilePicture">
            <input type="file">
            <i class="editButton fas fa-edit fa-2x"></i>
        </label><br>


    </div>
    <label for="name">name: </label> {{ Auth::user()->name }} <br>
    <label for="gender">gender:</label>
    <select name="gender" id="">
        <option value=""></option>
        <option value="male">Male</option>
        <option value="female">female</option>
    </select> <br>
    <label for="created">Account created on: </label> <br> {{ Auth::user()->created_at }}
</div>
@endsection
