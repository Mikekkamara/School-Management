<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $primarykey = 'orderNumber';
    protected $fillable = ['productName', 'companyName', 'orderDate', 'requiredDate', 'unitPrice', 'quantity', 'discount', 'totalAmount'];
}
