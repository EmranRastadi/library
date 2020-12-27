<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auther extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'family' , 'birthday'];

    public function book()
    {
        $this->hasMany(Book::class);
    }
}
