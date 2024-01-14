<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    use HasFactory;

    public $table = "menucategories";

    public function cafe()
    {
        return $this->hasMany(Cafe::class, 'id');
    }
}
