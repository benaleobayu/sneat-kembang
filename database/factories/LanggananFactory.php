<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Langganan>
 */
class LanggananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'regencies_id' =>$this->faker->numberBetween('1', '49'),
            'hari' =>$this->faker->randomElement(['senin','rabu','sabtu']),
            'notes' => $this->faker->paragraph(30),
            // 'flower_id' => $this->faker->numberBetween('1', '12'),
            // 'total' => $this->faker->numberBetween('1', '4'),
            'pic' => "Beno"

        ];
    }
}
