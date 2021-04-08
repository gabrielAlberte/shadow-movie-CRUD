<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Movie;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'type',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function Movies()
    {
        return $this->hasMany(Movie::class);
    }
}
