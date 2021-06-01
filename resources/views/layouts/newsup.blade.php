@extends('layouts.app')
@section('content')
    <div class="supplierContainer">
        <x-nav-bar/>
        <div class="formContainer">
            <p>Create Supplier</p>
            <form action="{{ route('createSupplier') }}" method="post">
            @csrf
                <label for="supplierNumber">supplier number</label> <br>
                <input type="number" name="supplierNumber"
                class="@error('supplierNumber') is-invalid @enderror"
                value="{{ old('supplierNumber') }}"> <br>
                    @error('supplierNumber')
                        <span>{{ $message }}</span> <br>
                    @enderror

                <label for="companyName">company name</label> <br>
                <input type="text" name="companyName"
                class="@error('companyName') is-invalid @enderror"
                value="{{ old('companyName') }}"><br>
                    @error('companyName')
                        <span>{{ $message }}</span> <br>
                    @enderror

                <label for="physical Address">physical address</label> <br>
                <input type="text" name="physicalAddress"> <br>

                <label for="telephoneNumber">telephone number</label> <br>
                <input type="tel" name="telephoneNumber"
                class="@error('telephoneNumber') is-invalid @enderror"
                value="{{ old('telephoneNumber') }}"> <br>
                    @error('telephoneNumber')
                        <span>{{ $message }}</span> <br>
                    @enderror

                <button type="submit">submit</button>
                <h6>{!! Session::has('msg') ? Session::get('msg') : ' ' !!}</h6>
            </form>
        </div>
    </div>
@endsection



