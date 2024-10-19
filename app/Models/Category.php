<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;
<<<<<<< HEAD

    protected $fillable = [
        'name',
        'description',
        'image',
        'parent'
    ];
=======
>>>>>>> 1814561 (first commit)
}
