<?php

namespace Database\Seeders;

use App\Models\Auther;
use App\Models\Book;
use App\Models\Cat;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Auther::factory(10)->create();
        Book::factory(10)->create();
        Cat::factory(10)->create();
        Student::factory(10)->create();

        $cat = Cat::all();
        Book::all()->each(function ($book) use ($cat) {
            $book->cats()->attach(
                $cat->random(rand(1,3))->pluck('id')->toArray()
            );
        });
    }
}
