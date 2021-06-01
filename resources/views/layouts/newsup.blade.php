@extends('layouts.app')
@section('content')
    <div class="supplierContainer">
        <x-nav-bar/>
        <div class="formContainer">
            <label for="supplierNumber">supplier number</label> <br>
            <input type="number" name="supplierNumber"
            class="@error('supplierNumber') is-invalid @enderror"> <br>
                @error('supplierNumber')
                    <span>{{ $message }}</span> <br>
                @enderror

            <label for="companyName">company name</label> <br>
            <input type="text" name="companyName"
            class="@error('companyName') is-invalid @enderror"><br>
                @error('companyName')
                    <span>{{ $message }}</span> <br>
                @enderror

            <label for="physical Address">physical address</label> <br>
            <input type="text" name="physicalAddress" > <br>

            <label for="telephoneNumber">telephone number</label> <br>
            <input type="tel" name="telephoneNumber"
            class="@error('telephoneNumber') is-invalid @enderror"> <br>
                @error('telephoneNumber')
                    <span>{{ $message }}</span> <br>
                @enderror

            <button type="submit">submit</button>
        </div>
    </div>
@endsection



