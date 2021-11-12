<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


    protected $fillable = ['title','author_id','amount','cover'];
    protected $visible = ['title','author_id','amount','cover'];
    public $timestamps= true;

    // membuat one to many dengan Model "Author"
    public function author()
    {
        // data Model 'Book' bisa dimiliki oleh Model "Author"
        // melalui fk "author_id"
        return $this->belongsTo('App\Models\Book', 'author_id');
    }

    public function image()
    {
        if ($this->cover && file_exists(public_path('images/books/' . $this->cover))) {
            return asset('images/books/' . $this->cover);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/books/' . $this->cover))) {
            return unlink(public_path('images/books/' . $this->cover));
        }

    }
}

