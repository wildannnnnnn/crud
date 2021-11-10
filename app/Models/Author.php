<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    //memberikan akses field apa saja yang bole di isi
    protected $fillabele = ['name'];

    //memberikan akses field apa saja yang bole dilihat
    //atau di keluarkan
    protected$visible = ['name'];

    //mencatat waktu pembuatan dan update data secara otomatis
    public $timestamps = true;

    //membuat relasi one to many dengan model "book"

    public function books()
    {
        //model 'author' bisa memiliki banyak data dari
        //model 'book' melalui fk 'author_id'
        return $this->hasMany('App\Models\Book', 'author_id');
    }
}
