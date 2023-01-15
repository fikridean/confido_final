<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AirlineFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'name' => "Garuda Indonesia",
      'gate' => '11B'
    ];
  }

  /**
   * Indicate that the model's email address should be unverified.
   *
   * @return static
   */
  // public function unverified()
  // {
  //     return $this->state(fn (array $attributes) => [
  //         'email_verified_at' => null,
  //     ]);
  // }
}
