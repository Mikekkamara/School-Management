@extends('layouts.app')
@section('content')
    <div class="newsup_container">
        <p class="newsup_title">new supplier <a href="{{ url('/home/new_user') }}"><i class="hey fas fa-times"></i></a></p>
        <div class="success">

            {!! Session::has('msg') ? Session::get('msg') : ' ' !!}
        </div>
        <form action="{{ url('/home/new_user/supplier') }}" method="POST" id="sup_form" class="newsup_form">
        @csrf
            <div class="supNo" id="supNo">
                <label for="supNo">{{ __('Suppplier Number') }}</label>

                <input type="number"
                        name="supNo"
                        max="100"
                        min="50"
                        autofocus

                        class="@error('supNo') is-invalid @enderror">

                @error('supNo')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

            </div>
          
            <div class="coName">
                <label for="coName">company name</label>
                <input type="text"
                        name="coName"
                        class="@error('coName') is-invalid @else is-valid @enderror">
                @error('supNo')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="phyAddress">
                <label for="phyAddress">address</label>
                <input type="text" name="phyAddress" >
            </div>

            <div class="telNo">
                <label for="telNo">telephone number</label>
                <input type="tel" name="telNo">
            </div>
        </form>
        <button class="sup_submit" type="submit" onclick="event.preventDefault();document.getElementById('sup_form').submit();">submit</button>
    </div>
@endsection
