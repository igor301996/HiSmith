<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
            'name',
            'description',
            'price',
            'author_id',
        ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function getPriceFmtAttribute()
    {
        return round($this->price / 100) . ' $';
    }
}
