@extends('layouts.app')
@section('content')
    <div class="borrow_container">
        <p class="report_titles">Request an Item<a href="{{ url('/home') }}"><i class="hey fas fa-times"></i></a></p>
        <form action="" id="borrow_form" method="post">
        @csrf
        <div class="appName">
            <label for="appName">Applicant Name</label>
            <select name="appName" id="appName">
                <option value="{{ $hey }}">{{ $hey }}</option>
            </select>
        </div>

        @if (false)

            <div class="admissionNo">
                <label for="admissionNo">Admission Number</label>
                <input type="number" name="admissionNo" id="admNo" placeholder="adm">
            </div>

        @else

            <div class="iDNo">
                <label for="iDNo">ID Number</label>
                <input type="number" name="iDNo" id="idNo" >
            </div>

        @endif

        <div class="proName">
            <label for="proName">Product Name</label>
            <input type="text" name="proName">
        </div>
        <div class="cond">
            <label for="cond">Condition</label>
            <select name="cond" id="cond">
                <option value="New">New</option>
                <option value="Old">Old</option>
            </select>
        </div>
        <div class="duration">
            <label for="duration">Borrow Duration</label>
            <input type="" name="duration" id="duration">
        </div>
        <div class="retDate">
            <label for="retDate">Return date</label>
            <input type="date" name="retDate" id="retDate">
        </div>
        <div class="returned">
            <label for="returned">Return status</label>
            <select name="returned" id="returned">
                <option value="Returned">Returned</option>
                <option value="Not Returned">Not Returned</option>
            </select>
        </div>
        </form>

        <button type="submit" class="borrow_btn" onclick="event.preventDefault();document.getElementById('borrow_form').submit();">submit</button>
    </div>
@endsection
