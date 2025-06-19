<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    // Accessor untuk photo untuk mengkonversi path
    public function getPhotoAttribute($value)
    {
        if ($value && strpos($value, 'public/') === 0) {
            return str_replace('public/', 'storage/', $value);
        }
        return $value;
    }
}
