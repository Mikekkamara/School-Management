<div class="storeContainer">
    <!-- Well begun is half done. - Aristotle -->
    <a href="{{ route('reOrder') }}">
        <img src="{{ asset('img/reorder.svg') }}" alt="Reorder Items"> <br>
        reorder
    </a>

    <a href="{{ route('expire') }}">
        <img src="{{ asset('img/expire.svg') }}" alt="Expiring Items"> <br>
        exipring items
    </a>

    <a href="">
        <img src="{{ asset('img/issued.svg') }}" alt="Issued Items" > <br>
        items issued
    </a>

    <a href="">
        <img src="{{ asset('img/charge.svg') }}" alt="ChargeSheets" > <br>
        chargesheets
    </a>
</div>
