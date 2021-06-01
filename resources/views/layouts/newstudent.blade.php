@extends('layouts.app')
@section('content')
<div class="studentContainer">
    <x-nav-bar/>
    <div class="formContainer">
        <p>Create Student</p>
        <form action="{{ route('createStudent') }}" method="post">
        @csrf
            <label for="admissionNumber">admission number</label> <br>
            <input type="number" name="admissionNumber"
            class="@error('admissionNumber') is-invalid @enderror"
            value="{{ old('admissionNumber') }}"> <br>
                @error('admissionNumber')
                    <span>{{ $message }}</span> <br>
                @enderror

            <label for="studentName">student name</label> <br>
            <input type="text" name="studentName"
            class="@error('admissionNumber') is-invalid @enderror"
            value="{{ old('studentName') }}"> <br>
                @error('studentName')
                    <span>{{ $message }}</span> <br>
                @enderror

            <label for="className">class</label> <br>
            <select name="className" id="className"> <br>

                <option value="Form 1">Form 1</option>
                <option value="Form 2">Form 2</option>
                <option value="Form 3">Form 3</option>
                <option value="Form 4">Form 4</option>

            </select> <br>

            <label for="houseName">house</label> <br>
            <select name="houseName" id="houseName">

                <option value="nile">nile</option>
                <option value="zambezi">zambezi</option>
                <option value="limpompo">limpompo</option>
                <option value="tana">tana</option>

            </select> <br>

            <button type="submit" value="submit">submit</button> <br>
            <h6>{!! Session::has('msg') ? Session::get('msg') : ' ' !!}</h6>

        </form>
    </div>
</div>
@endsection
