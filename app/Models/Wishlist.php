<?php

namespace App\Models;

use App\Traits\HasImages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlist extends Model
{
    use HasFactory;
    use HasImages;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function wishes()
    {
        return $this->hasMany(Wish::class);
    }
}
