<?php

namespace Database\Factories;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'status' => User::STATUS['ACTIVE']
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function admin()
    {
        return $this->state(function (array $attributes) {
            return [
                'role_id' => Role::ADMIN->value,
            ];
        });
    }

    public function user()
    {
        return $this->state(function (array $attributes) {
            return [
                'role_id' => Role::USER->value,
            ];
        });
    }
}
