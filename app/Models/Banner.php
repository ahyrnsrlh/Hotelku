<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    
    // Accessor untuk banner_src untuk mengkonversi path
    public function getBannerSrcAttribute($value)
    {
        if ($value && strpos($value, 'public/') === 0) {
            return str_replace('public/', 'storage/', $value);
        }
        return $value;
    }
}
