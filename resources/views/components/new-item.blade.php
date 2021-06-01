<div class="newItem">
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <a href="{{ url('/home/expendable') }}"
    class="{{ request()->is('home/expendable') ? 'active' : ' ' }}">
        <img src="{{ asset('../img/expendable.svg') }}" alt="">
        expendable <br> inventory
    </a>
    <a href="{{ url('/home/permanent') }}"
    class="{{ request()->is('home/permanent') ? 'active' : ' ' }}">
        <img src="{{ asset('../img/permanent.svg') }}" alt="">
        permanent <br> inventory
    </a>
    <a href="{{ url('/home/consumables') }}"
    class="{{ request()->is('home/consumables') ? 'active' : ' ' }}">
        <img src="{{ asset('../img/storage.svg') }}" alt="">
        consumable <br> inventory
    </a>

</div>
