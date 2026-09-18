<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Copy;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Copy>
 */
class CopyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // OOP lekérdező, :: - nem statikus metod hívás, all - vissza adja a *(sqlben)
            //teszt adatok létehozás
            'book_id' => Book::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
