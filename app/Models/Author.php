<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // memberikan akses field apa saja yang boleh di isi
    protected $fillable = ['name'];

    // memberikan akses field apa saja yang boleh dilihat
    // atau dikeluarkan
    protected $visible = ['name'];

    // mencatat waktu pembuatan & update data secara otomatis
    public $timetamps= true;

    // membuat relasi one to many dengan model 'book'
    public function books()
    {
        // model 'author' bisa memiliki banyak data dari
        //vmodel 'book' melalui fk 'author_id'
        return $this->hasMany('App\Models\Book', 'author_id');
    }

}
