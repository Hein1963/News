<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'category_id',
        'slug',
        'intro',
        'body'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
