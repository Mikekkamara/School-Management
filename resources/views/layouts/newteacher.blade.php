@extends('layouts.app')
@section('content')
    <div class="teacherContainer">
        <x-nav-bar/>
        <div class="formContainer">
            <form action="" method="post">
            @csrf
                <label for="idNumber">ID number</label> <br>
                <input type="number" name="idNumber"> <br>

                <label for="teacherName">teacher name</label>
                <input type="text" name="teacherName"> <br>

                <label for="teacherAddress">address</label> <br>
                <input type="text" name="teacherAddress"> <br>

            </form>
        </div>
    </div>
@endsection

