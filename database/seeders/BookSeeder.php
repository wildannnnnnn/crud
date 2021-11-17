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
        // Membuat sample penulis
        $author1 = Author::create(['name'=>'Rahmat Awaludin']);
        $author2 = Author::create(['name'=>'Nadhi A Tsana']);
        $author3 = Author::create(['name'=>'Takdir A Ridwan']);

        // Membuat sample book
        $book1 = Book::create(['title'=>'mie ayam',
            'amount'=>353, 'author_id'=>$author1->id,
        ]);
        $book2 = Book::create(['title'=>'es batu',
        'amount'=>157, 'author_id'=>$author2->id,
        ]);
        $book3 = Book::create(['title'=>'chiken',
        'amount'=>251, 'author_id'=>$author3->id,
        ]);
        $book4 = Book::create(['title'=>'es kelapa',
        'amount'=>178, 'author_id'=>$author3->id,
        ]);
    }
}
