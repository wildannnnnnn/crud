<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    //memberikan akses field apa saja yang boleh di isi
    protected $fillabel = ['nama'];
    //memberikan akses field apa saja yang boleh dilihat
    //atau di keluarkan
    protected $visible = ['nama'];

    //mencatat waktu pembuatan & update data secara otomatis
    public $timetamps = true;

    //membuat relasi one to many dengan model "Book"
    public function transaksi(){
        //model 'Author' bisa memiliki banyak data dari
        //model 'Book' melalui fk 'author_id'
        return $this->hasmany('App\Models\Transaksi', 'id pelanggan');
    }
    public function pesans(){
        //model 'Author' bisa memiliki banyak data dari
        //model 'Book' melalui fk 'author_id'
        return $this->hasmany('App\Models\Pesan', 'id_pelanggan');
    }
}
