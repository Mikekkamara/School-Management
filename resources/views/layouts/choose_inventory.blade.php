@extends('layouts.app')
@section('content')
        <h5 class="choose_inventory_title">Choose Storage <a href="{{ url('/home') }}"><i class="hey fas fa-times"></i></a></h5>

    <div class="choose_inventoryContainer">
        <div class="consumables">
            <img src="{{ asset('../img/storage.svg') }}" alt=""> <br>
            <a href="{{ url('/home/consumables') }}"><span class="labels">Consumable Inventory</span></a>
        </div>

        <div class="permanent">
            <img src="{{ asset('../img/permanent.svg') }}" alt=""> <br>
            <a href="{{ url('/home/permanent') }}"><span class="labels">Permanent Inventory</span></a>
        </div>

        <div class="expendables">
            <img src="{{ asset('../img/expendable.svg') }}" alt=""> <br>
            <a href="{{ url('/home/expendable') }}"><span class="labels">Expendable Inventory</span></a>
        </div>
    </div>
@endsection
