<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\SortableTrait;

class Article extends Model
{
    use HasFactory, SortableTrait;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
