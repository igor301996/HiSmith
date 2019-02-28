<?php

use Illuminate\Database\Seeder;
use App\Author as AuthorModel;

class Author extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(AuthorModel::class, 10)->create()->each(function (AuthorModel $author) {
            $author->books()->saveMany(factory(\App\Book::class, 10)->make());
        });
    }
}
