<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'customer_id', 'makanan_id', 'quantity', 'price', 'total_price'];

    public $incrementing = false;

    public function customer(){
        return $this->belongsTo(CustomerTable::class, 'customer_id');
    }

    public function makanan(){
        return $this->belongsTo(Cafe::class, 'makanan_id');
    }
}
