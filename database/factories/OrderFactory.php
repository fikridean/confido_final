<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class OrderFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'user_id' => 1,
      'order_code' => idate("U"),
      'ticket_id' => 1,
      'round_trip' => true,
      'go_date' => date('Y-m-d'),
      'amount' => 2
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
