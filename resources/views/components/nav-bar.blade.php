<div class="navBar">
    {{-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh --}}
    <a
        class="{{ request()->is('home/new_user/teacher') ? 'active' : '' }}"
        href="/home/new_user/teacher">
        <img src="{{ asset('../img/teacher.svg') }}" alt=""> 
        Teacher
    </a>

    <a
    class="{{ request()->is('home/new_user/student') ? 'active' : ' ' }}"
        href="/home/new_user/student">
        <img src="{{ asset('../img/student.svg') }}" alt="">
        Student
    </a>

    <a
    class="{{ request()->is('home/new_user/supplier') ? 'active' : '' }}"
        href="/home/new_user/supplier">
        <img src="{{ asset('../img/order.svg') }}" alt="">
        Supplier
    </a>
</div>
