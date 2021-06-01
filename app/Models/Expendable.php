<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expendable extends Model
{
    use HasFactory;
    protected $primarykey = 'productNumber';
    protected $fillable = ['productName', 'quantity'];

}
