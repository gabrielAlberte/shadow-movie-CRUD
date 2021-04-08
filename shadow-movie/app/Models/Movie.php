<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Category;

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

    public function Categories()
    {
        return $this->belongsTo(Category::class);
    }

}
