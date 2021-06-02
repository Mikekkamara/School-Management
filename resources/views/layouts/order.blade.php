@extends('layouts.app')
@section('content')
    <div class="ordersContainer">
        <div class="formContainer">
            <p>new order</p>
            <form action="{{ url('/home/placeOrder') }}" method="post">
            @csrf
                <label for="productName">product name </label> <br>
                <input type="text" name="productName"
                class="@error('productName') is-invalid @enderror"
                value="{{ old('productName') }}"
                autofocus><br>
                        @error('productName')
                            <span>{{ $message }}</span> <br>
                        @enderror

                <label for="companyName">company name</label> <br>
                <input type="text" name="companyName"
                class="@error('companyName') is-invalid @enderror"
                value="{{ old('companyName') }}"><br>
                        @error('companyName')
                            <span>{{ $message }}</span> <br>
                        @enderror

                <label for="requiredDate">required date</label> <br>
                <input type="date" name="requiredDate"
                class="@error('requiredDate') is-invalid @enderror"
                value="{{ old('requiredDate') }}"> <br>
                        @error('requiredDate')
                            <span>{{ $message }}</span> <br>
                        @enderror

                <label for="unitPtice">unit price</label> <br>
                <input type="number" name="unitPrice"
                class="@error('unitPrice') is-invalid @enderror"
                value="{{ old('unitPrice') }}"> <br>
                        @error('unitPrice')
                            <span>{{ $message }}</span> <br>
                        @enderror

                <label for="quantity">quantity</label> <br>
                <input type="number" name="quantity"
                class="@error('quantity') is-invalid @enderror"
                value="{{ old('quantity') }}"> <br>
                        @error('qauntity')
                            <span>{{ $message }}</span> <br>
                        @enderror

                <label for="discount">discount</label> <br>
                <input type="number" name="discount"
                class="@error('discount') is-inavlid @enderror"
                value="{{ old('discount') }}"> <br>
                        @error('discount')
                            <span>{{ $message }}</span> <br>
                        @enderror

                <button type="submit">submit</button>
                <h6>{!! Session::has('msg') ? Session::get('msg') : ' ' !!}</h6>
            </form>
        </div>
    </div>
@endsection


