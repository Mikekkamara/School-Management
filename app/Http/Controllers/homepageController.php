<?php

namespace App\Http\Controllers;
use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Consumable;
use App\Models\Expendable;
use App\Models\Permanent;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class homepageController extends Controller
{
    public function new_user(){
        return view('layouts.choose_user');
    }

    public function new_item(){
        return view('layouts.choose_inventory');
    }
    public function order_item(){
        return view('layouts.order');
    }

    // place a new order fx
    public function place_order(Request $request){
        $total = ($request->input('unitPrice') * $request->input('quantity'));
        $newTotal = ((100 - $request->input('discount'))/100) * $total;
        $order = Purchase::create([
            'productName'=>$request->input('productName'),
            'companyName'=>$request->input('companyName'),
            'orderDate'=>Date("Y-m-d"),
            'requiredDate'=>$request->input('requiredDate'),
            'unitPrice'=>$request->input('unitPrice'),
            'quantity'=>$request->input('quantity'),
            'discount'=>$request->input('discount'),
            'totalAmount'=>$newTotal
        ]);
        // return back()->withInput(['hey','Success']);
        // session()->flash('msg', 'Order submitted success');
        session()->flash('msg', 'Order submitted successfully');
        return redirect()->back();
    }

    public function reorder(){
        // find items that have a remaining quantity less than 5 in the database
        $min = 5;
        $items = Consumable::where('remainingQuantity', '<=', $min)->get();
        $count = $items->count();
        return view('layouts.reorder')->with(['items' => $items, 'count' => $count]);

    }
    public function redirectFx(){
        return view('hey');
    }
    public function expire(){
        // get all  items from cons inventory with life <= 1

        $expire = Consumable::where('life' , '<=', 1)->get();
        $count = $expire->count();
        return view('layouts.expire')->with(['count'=>$count, 'items'=>$expire]);
    }
    public function create_consumable(Request $request){
        // $life = $request->input('expDate') - $request->input('delDate');
        $totalPrice = $request->input('initialQuantity') * $request->input('unitPrice');
        $d = Date("Y-m-d");
        $y = $request->input('expiryDate');
        $date1 = strtotime($d);
        $date2 = strtotime($y);
        $sec = $date2 - $date1;
        $days = $sec / 86400;

        $validated = $request->validate([
            'productName'=>'required|unique:consumables,productName',
            'unitPrice'=>'required|numeric',
            'expiryDate'=>'required|date',
            'deliveryDate'=>'required',
            'initialQuantity'=>'required|numeric'
        ]);

        $consumable = Consumable::create([
            'productName'=>$request->input('productName'),
            'unitPrice'=>$request->input('unitPrice'),
            'expiryDate'=>$request->input('expiryDate'),
            'deliveryDate'=>$request->input('deliveryDate'),
            'initialQuantity'=>$request->input('initialQuantity'),
            'life'=>$days,
            'totalPrice'=>$totalPrice,
            'remainingQuantity'=>$request->input('initialQuantity')
        ]);
        session()->flash('msg', 'Item recorded successfully');
        return redirect()->back();
    }
    // I.m s.o.r.r.y. :-D
    public function create_permanent(Request $request){
        $validated = $request->validate([
            'productName'=>'required|unique:expendables,productName',
            'unitPrice'=>'required|numeric',
            'quantity'=>'required|numeric'
        ]);

        $price = $request->input('unitPrice') * $request->input('quantity');
        $permanent =  Permanent::create([
            'productName'=>$request->input('productName'),
            'unitPrice'=>$request->input('unitPrice'),
            'purchasePrice'=>$price,
            'quantity'=>$request->input('quantity'),
            'condition'=>$request->input('condition')
        ]);
        session()->flash('msg', 'item recorded successfully');
        return redirect()->back();
    }
    public function create_expendable(Request $request){
        $validated = $request->validate([
            'productName'=>'required|alpha_num',
            'quantity'=>'required|numeric'
        ]);
        $expendable = Expendable::create([
            'productName'=>$request->input('productName'),
            'quantity'=>$request->input('quantity')
        ]);
        session()->flash('msg', 'item recorded successfully');
        return redirect()->back();
    }
    /*
    Create new users,add users to the datbase
    */
    // suppliers
    public function create_supplier(Request $request){
        $validated = $request->validate([
            'supplierNumber'=>'required|numeric',
            'companyName'=>'required|alpha_num',
            'physicalAddress'=>'nullable',
            'telephoneNumber'=>'required|numeric'
        ]);
        $supplier = Supplier::create([
            'supplierNumber'=>$request->input('supplierNumber'),
            'companyName'=>$request->input('companyName'),
            'physicalAddress'=>$request->input('physicalAddress'),
            'telephoneNumber'=>$request->input('telephoneNumber')
        ]);
        session()->flash('msg', 'Created successfully');
        return redirect()->back();
    }
    // student
    public function create_student(Request $request){
        $validated = $request->validate([
            'admissionNumber'=>'numeric|required|unique:students,admissionNumber',
            'studentName'=>'required|bail'
        ]);
        $student = Student::create([
            'admissionNumber'=>$request->input('admissionNumber'),
            'studentName'=>$request->input('studentName'),
            'class'=>$request->input('className'),
            'house'=>$request->input('houseName')
        ]);
        session()->flash('msg', 'Created successfully');
        return redirect()->back();
    }
    // teacher
    public function create_teacher(Request $request){
        $validated = $request->validate([
            'idNumber'=>'numeric|required',
            'teacherName'=>'required',
            'teacherAddress'=>'required|alpha_num',
            'mobileNumber'=>'required|numeric'
        ]);
        $teacher = Teacher::create([
            'idNumber'=>$request->input('idNumber'),
            'teacherName'=>$request->input('teacherName'),
            'address'=>$request->input('teacherAddress'),
            'mobNumber'=>$request->input('mobileNumber')

        ]);
        session()->flash('msg', 'Created successfully');
        return redirect()->back();
    }

    // view profile

    public function viewProfile(){
        return view('layouts.profile');
    }

}
