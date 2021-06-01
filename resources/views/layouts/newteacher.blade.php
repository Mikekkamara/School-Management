@extends('layouts.app')
@section('content')
    <div class="teacherContainer">
        <x-nav-bar/>
        <div class="formContainer">
            <p>create teacher</p>
            <form action="{{ route('createTeacher') }}" method="post">
            @csrf
                <label for="idNumber">ID number</label> <br>
                <input type="number" name="idNumber"
                class="@error('idNumber') is-invalid @enderror"
                value="{{ old('idNumber') }}"> <br>
                    @error('idNumber')
                        <span>{{ $message }}</span> <br>
                    @enderror

                <label for="teacherName">teacher name</label> <br>
                <input type="text" name="teacherName"
                class="@error('teacherName') is-invalid @enderror"
                value="{{ old('teacherName') }}"> <br>
                    @error('teacherName')
                        <span>{{ $message }}</span> <br>
                    @enderror

                <label for="teacherAddress">address</label> <br>
                <input type="text" name="teacherAddress"
                class="@error('teacherAddress') is-invalid @enderror"
                value="{{ old('teacherAddress') }}"> <br>
                    @error('teacherAddress')
                        <span>{{ $message }}</span> <br>
                    @enderror

                <label for="mobileNumber">mobile number</label> <br>
                <input type="tel" name="mobileNumber"
                class="@error('mobileNumber') is-invalid @enderror"
                value="{{ old('mobileNumber') }}"> <br>
                    @error('mobileNumber')
                        <span>{{ $message }}</span> <br>
                    @enderror

                <button id="submitTeacher">submit</button>
                <h6>{!! Session::has('msg') ? Session::get('msg') : ' ' !!}</h6>
            </form>
        </div>
    </div>
@endsection

