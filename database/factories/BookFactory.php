<?php

namespace Database\Factories;

use App\Models\Auther;
use App\Models\Book;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $auther = Auther::pluck('id')->toArray();
//        $student = Student::pluck('id')->toArray();
        return [
            //
            'name' => $this->faker->name,
            'auther_id' => $this->faker->randomElement($auther),
            'student_id' => 0,
        ];
    }
}
