<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Expense;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    protected $model = Expense::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount' => $this->faker->randomFloat(2, 1, 1000000),
            'date' => $this->faker->date(),
            'category_id' => Category::factory(),
            'payment_method_id' => PaymentMethod::factory(),
        ];
    }
}
