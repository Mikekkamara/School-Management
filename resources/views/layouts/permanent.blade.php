@extends('layouts.app')
@section('content')
    <div class="permanentContainer">
        <x-new-item/>
        <div class="formContainer">
            <p>new item</p>
            <form action="{{ route('createPermanent') }}" method="post">
            @csrf
                <label for="productName">product name</label> <br>
                <input type="text" name="productName"
                class="@error('productName') is-invalid @enderror"
                value="{{ old('productName') }}"> <br>
                    @error('productName')
                        <span>{{ $message }}</span>
                    @enderror

                <label for="unitPrice">unit price</label> <br>
                <input type="number" name="unitPrice"
                class="@error('unitPrice') is-invalid @enderror"
                value="{{ old('productName') }}" > <br>
                    @error('unitPrice')
                        <span>{{ $message }}</span>
                    @enderror

                <label for="quantity">quantity</label> <br>
                <input type="number" name="quantity"
                class="@error('quantity') is-invalid @enderror"
                value="{{ old('productName') }}"> <br>
                    @error('quantity')
                        <span>{{ $message }}</span>
                    @enderror

                <label for="condition">condition</label> <br>
                <select name="condition">

                    <option value="new">New</option>
                    <option value="old">Old</option>

                </select> <br>

                <button type="submit">submit</button> <br>
                <h6>{!! Session::has('msg') ? Session::get('msg') : ' ' !!}</h6>
            </form>
        </div>
    </div>
@endsection
