<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'title',
        'author',
        'description',
        'language',
        'url',
        'category_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
