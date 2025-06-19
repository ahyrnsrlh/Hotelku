<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomtypeimage extends Model
{
    use HasFactory;
    
    // Accessor untuk img_src untuk mengkonversi path
    public function getImgSrcAttribute($value)
    {
        if ($value && strpos($value, 'public/') === 0) {
            return str_replace('public/', 'storage/', $value);
        }
        return $value;
    }
}
