<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    public function category()
    {
        return $this->belongsTo(category::class, 'c_id', 'id');
    }
}
