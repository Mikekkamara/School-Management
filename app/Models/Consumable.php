<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumable extends Model
{
    protected $primarykey = 'productNumber';
    protected $fillable = ['productName', 'unitPrice', 'expiryDate', 'deliveryDate', 'initialQuantity','life','remainingQuantity', 'totalPrice'];

    use HasFactory;
}
