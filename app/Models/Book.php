<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillabele = ['title', 'author_id', 'amount', 'cover'];
    protected $visible = ['title', 'author_id', 'amount', 'cover'];
    public $timetamps = true;

    //membuat relasi one to many
    public function author()
    {
        //data model 'Book' bisa dimiliki pleh model "author"
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\Authors', 'author-id');
    }
}
