<?php

namespace App\Traits;
trait HasImages
{
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
