<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function auther()
    {
        return $this->belongsTo(Auther::class);
    }

    public function cats()
    {
        return $this->belongsToMany(Cat::class , 'book_cat' , 'book_id' , 'cat_id');
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }

}
