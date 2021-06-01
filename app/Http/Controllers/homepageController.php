<?php

namespace App\Http\Controllers;
use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Consumable;
use App\Models\Expendable;
use App\Models\Permanent;
use App\Models\Student;
use App\Models\Teacher;
use GuzzleHttp\Promise\Create;
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
        $totalPrice = $request->input('InitQuantity') * $request->input('price');
        $d = Date("Y-m-d");
        $y = $request->input('expDate');
        $date1 = strtotime($d);
        $date2 = strtotime($y);
        $sec = $date2 - $date1;
        $days = $sec / 86400;


        $consumable = Consumable::create([
            'productName'=>$request->input('proName'),
            'unitPrice'=>$request->input('price'),
            'expiryDate'=>$request->input('expDate'),
            'deliveryDate'=>$request->input('delDate'),
            'initialQuantity'=>$request->input('InitQuantity'),
            'life'=>$days,
            'totalPrice'=>$totalPrice,
            'remainingQuantity'=>$request->input('InitQuantity')
        ]);
        session()->flash('msg', '*item recorded successfully');
        return redirect()->back();
    }
    public function create_permanent(Request $request){
        $price = $request->input('unitPrice') * $request->input('quantity');
        $permanent =  Permanent::create([
            'productName'=>$request->input('pname'),
            'unitPrice'=>$request->input('unitPrice'),
            'purchasePrice'=>$price,
            'quantity'=>$request->input('quantity'),
            'condition'=>$request->input('condition')
        ]);
        session()->flash('msg', 'item recorded successfully');
        return redirect()->back();
    }
    public function create_expendable(Request $request){
        $expendable = Expendable::create([
            'productName'=>$request->input('pname'),
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
            'supNo'=> 'required|numeric|max:4',
            'coName'=>'required|alpha_num',
            'phyAddress'=>'required|alpha_dash',
            'telNo'=>'numeric|required|max:13'
        ]);
        $supplier = Supplier::create([
            'supplierNumber'=>$request->input('supNo'),
            'companyName'=>$request->input('coName'),
            'physicalAddress'=>$request->input('phyAddress'),
            'telephoneNumber'=>$request->input('telNo')
        ]);
        session()->flash('msg', 'Created successfully');
        return redirect()->back();
    }
    // student
    public function create_student(Request $request){
        $student = Student::create([
            'admissionNumber'=>$request->input('admNo'),
            'studentName'=>$request->input('studName'),
            'class'=>$request->input('class'),
            'house'=>$request->input('house')
        ]);
        session()->flash('msg', 'Created successfully');
        return redirect()->back();
    }
    // teacher
    public function create_teacher(Request $request){
        $teacher = Teacher::create([
            'idNumber'=>$request->input('number'),
            'teacherName'=>$request->input('trname'),
            'address'=>$request->input('addr'),
            'mobNumber'=>$request->input('mobNumber')

        ]);
        session()->flash('msg', 'Created successfully');
        return redirect()->back();
    }

}
