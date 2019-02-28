<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
            'first_name',
            'last_name',
            'patronymic'
        ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
