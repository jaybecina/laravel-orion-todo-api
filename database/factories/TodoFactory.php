<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\NoteContainer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $note_containers = NoteContainer::all();

        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'note_container_id' => NoteContainer::inRandomOrder()->take(rand(1, 1))->pluck('id')->first()
        ];
    }
}
