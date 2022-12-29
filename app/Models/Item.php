<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function Orders()
    {
        return $this->belongsToMany(Order::class);
    }
    public function cgy()
    {
        return $this->belongsTo(Cgy::class); //屬於誰的關聯,設Article屬於Cgy的關聯
    }
}