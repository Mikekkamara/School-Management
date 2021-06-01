<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permanent extends Model
{
    use HasFactory;
    protected $primarykey = 'productNumber';
    protected $fillable = ['productName', 'unitPrice', 'purchasePrice', 'quantity', 'condition'];
    
}
