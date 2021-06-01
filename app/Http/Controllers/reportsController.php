<?php

namespace App\Http\Controllers;
use App\Models;
use App\Models\Consumable;
use App\Models\Expendable;
use App\Models\Permanent;
use App\Models\Purchase;
use App\Models\Student;
use App\Models\Supplier;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class reportsController extends Controller
{
    /*
    Supplier Report
    ------------
    */
    public function sup_report(){
        $supplier = Supplier::all();
        $count = count($supplier);
        return view('layouts.reports.sup')->with(['suppliers'=>$supplier, 'count'=>$count]);
    }

    /*
    Teacher report
    */
    public function teach_report(){
        $teacher = Teacher::all();
        $count = count($teacher);
        return view('layouts.reports.teach')->with(['teachers'=>$teacher, 'count'=>$count]);
    }
    /*
    Student report
    */
    public function stud_report(){
        $student = Student::all();
        $count = count($student);
        return view('layouts.reports.stud')->with(['students'=>$student, 'count'=>$count]);
    }
    /*
    Order reports
    */
    public function ord_report(){
        $order = Purchase::all();
        $count = count($order);
        return view('layouts.reports.ord')->with(['orders'=>$order, 'count'=>$count]);
    }
    /*
    Expendable Inventory Report
    */
    public function exp_report(){
        $expendable = Expendable::all();
        $count = count($expendable);
        return view('layouts.reports.exp')->with(['expendables'=>$expendable, 'count'=>$count]);
    }
    /*
    Permanent Inventory Report
    */
    public function perm_report(){
        $permanent = Permanent::all();
        $count = count($permanent);
        return view('layouts.reports.perm')->with(['permanents'=>$permanent, 'count'=>$count]);
    }
    /*
    Consumable Inventory Report
    */
    public function cons_report(){
        // items with life < 0 are considered expired, > 1 is safe and == 0 is safe
        // decided to do this in the view
        $consumable = Consumable::all();
        /* foreach($consumable as $cons){

            if($cons->life == null){
                $status = " ";
            }elseif($cons->life == 0){
                $status = "Expiring Today";
            }elseif($cons->life < 0){
                $status = "Expired";
            }else{
                $status = "Safe";
            }
        } */
        $count = count($consumable);
        return view('layouts.reports.cons')->with(['consumables'=>$consumable, 'count'=>$count]);
    }
    public function borrow_item(){
        // $pop = Student::all();
        $stud = Auth::user()->name;
        // dd($stud);
        return view('layouts.borrow')->with(['hey'=>$stud]);
    }
}
