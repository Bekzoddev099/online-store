<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;
=======
>>>>>>> 1814561 (first commit)

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
<<<<<<< HEAD

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
=======
>>>>>>> 1814561 (first commit)
}
