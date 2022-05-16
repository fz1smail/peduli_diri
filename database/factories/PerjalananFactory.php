<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Perjalanan;
use App\Models\UsersDetail;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Biodata>
 */
class PerjalananFactory extends Factory
{

    protected $model = Perjalanan::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'user_id' => $this->faker->randomDigitNotNull(),
            'tanggal' => $this->faker->date(),
            'waktu' => $this->faker->time(),
            'lokasi' => $this->faker->state(),
            'suhu' => $this->faker->numberBetween($min = 35, $max = 45),
        ];
    }
}
