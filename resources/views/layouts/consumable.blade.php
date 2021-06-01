@extends('layouts.app')
@section('content')
    <div class="consumableContainer">
        <x-new-item/>
        <div class="formContainer">
            <p>new item</p>
            <form action="" method="post">
                <label for="productname">product name</label> <br>
                <input type="text" name="productName"
                class="@error('productName') is-invalid @enderror"
                value="{{ old('productName') }}"><br>
                    @error('productName')
                        <span>{{ $message }}</span><br>
                    @enderror

                <label for="unitPrice">unit price</label> <br>
                <input type="number" name="unitPrice"
                class="@error('unitPrice') is-invalid @enderror"
                value="{{ old('unitPrice') }}"><br>
                    @error('unitPrice')
                        <span>{{ $message }}</span> <br>
                    @enderror

                <label for="expiryDate">expiry date</label> <br>
                <input type="date" name="expiryDate"
                class="@error('expiryDate') is-invalid @enderror"
                value="{{ old('expiryDate') }}"><br>
                    @error('expiryDate')
                        <span>{{ $message }}</span> <br>
                    @enderror

                <label for="deliveryDate">delivery date</label> <br>
                <input type="date" name="deliveryDate"
                class="@error('deliveryDate') is-invalid @enderror"
                value="{{ old('deliveryDate') }}"><br>
                    @error('deliveryDate')
                        <span>{{ $message }}</span> <br>
                    @enderror


                <label for="initialQuantity">initial quantity</label> <br>
                <input type="number" name="initialQuantity"
                class="@error('initialQuantity') is-invalid @enderror"
                value="{{ old('initialQuantity') }}"><br>
                    @error('initialQuantity')
                        <span>{{ $message }}</span>
                    @enderror
                <button type="submit">submit</button> <br>
                <h6>{!! Session::has('msg') ? Session::get('msg') : ' ' !!}</h6>
            </form>
        </div>
    </div>
@endsection


