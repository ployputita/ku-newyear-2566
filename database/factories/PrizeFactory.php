<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prize>
 */
class PrizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = array('เงิน', 'สิ่งของ', 'รางวัลพิเศษ');
        $type = $type[array_rand($type)];
        $max = 20;
        if ($type === 'สิ่งของ') $max = 5;
        $total_amount = fake()->numberBetween(1, $max);
        return [
            'type' => $type,
            'description' => fake()->realText(50),
            'prize_no' => fake()->numberBetween(1,5),
            'total_amount' => $total_amount,
            'left_amount' => $total_amount
        ];
    }
}
