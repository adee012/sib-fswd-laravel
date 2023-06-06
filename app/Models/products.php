<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['category_id', 'name', 'description', 'price', 'image', 'status', 'created_by', 'verified_by', 'verified_at'];

    public function categories()
    {
        return $this->belongsTo(categories::class, 'category_id', 'id');
    }
}
