@extends('layouts.app')
@section('content')
<div class="profileContainer">
    <div class="profileimageContainer">

        <img src="{{ asset('./profilePictures/'. Auth::user()->profilePath) }}" alt="">
        <div class="editProfile">
            <form action="" enctype="multipart/form-data" method="post">
            @csrf
                <input type="file" name="uploadProfile" class="custom-file-input" id="uploadProfile">
            </form>

        </div>


    </div>
    <label for="name">name: </label> {{ Auth::user()->name }} <br>
    <label for="gender">gender:</label>
    <select name="gender" id="" >

        <option value="male"
        @if (Auth::user()->gender == 'male')
            selected
        @endif
        >Male</option>

        <option value="female"
        @if (Auth::user()->gender == 'female')
            selected
        @endif
        >Female</option>
    </select> <br>

    <label for="created">Account created on: </label> <br> {{ Auth::user()->created_at }} <br>

    <label for="accountType">Account type: </label> {{ Auth::user()->type }}

    <form action="" method="post" id="deleteAccount">
        @csrf
        <button type="submit">delete my account</button>
    </form>

</div>
@endsection
