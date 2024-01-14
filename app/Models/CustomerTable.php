<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerTable extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_customer',
        'table_id',
    ];

    public function table(){
        return $this->belongsTo(Table::class, 'table_id');
    }
}
