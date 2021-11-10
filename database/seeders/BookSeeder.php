<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat sample penulis
        $author1 = Author::create(['name'=>'rahmat awaludin']);
        $author2 = Author::create(['name'=>'nadhifa a isana']);
        $author3 = Author::create(['name'=>'takdir a ridwan']);


        //membuat sample book
    $book1 = Book::create(['title'=>'seminggu belajar laravel',
        'amount' => 353, 'author_id' => $author1->id,
    ]);
    $book2 = Book::create(['title'=>'rintik sedu',
        'amount' => 157, 'author_id' => $author2->id,
    ]);
    $book3 = Book::create(['title'=>'sobat sakit',
        'amount' => 251, 'author_id' => $author3->id,
    ]);

    }
}
