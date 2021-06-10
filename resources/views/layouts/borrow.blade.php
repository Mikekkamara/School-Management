@extends('layouts.app')
@section('content')
<div class="ordersContainer">

    <div class="formContainer">
        <p class="report_titles">Request an Item<a href="{{ url('/home') }}"><i class="hey fas fa-times"></i></a></p>
        <form action="" id="borrow_form" method="post">
        @csrf
            <label for="appName">Applicant Name</label> <br>
            <select name="appName" id="appName">
                <option value="{{ $hey }}">{{ $hey }}</option>
            </select> <br>


        @if (false)

                <label for="admissionNo">Admission Number</label> <br>
                <input type="number" name="admissionNo" id="admNo" placeholder="adm"> <br>

        @else

                <label for="iDNo">ID Number</label> <br>
                <input type="number" name="iDNo" id="idNo" > <br>

        @endif

            <label for="proName">Product Name</label> <br>
            <input type="text" name="proName"> <br>

            <label for="cond">Condition</label> <br>
            <select name="cond" id="cond">
                <option value="New">New</option>
                <option value="Old">Old</option>
            </select> <br>

            <label for="duration">Borrow Duration</label> <br>
            <input type="" name="duration" id="duration"> <br>

            <label for="retDate">Return date</label> <br>
            <input type="date" name="retDate" id="retDate"> <br>

            <label for="returned">Return status</label> <br>
            <select name="returned" id="returned">
                <option value="Returned">Returned</option>
                <option value="Not Returned">Not Returned</option>
            </select> <br>

            <button type="submit">submit</button>
        </form>
    </div>
</div>
@endsection
