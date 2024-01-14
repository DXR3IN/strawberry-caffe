<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_menu', 'menu_id', 'harga', 'keterangan', 'rating', 'image_menu'];

    public $incrementing = false;

    public function menuCategory()
    {
        return $this->belongsTo(MenuCategory::class, 'menu_id');
    }
}
