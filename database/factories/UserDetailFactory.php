<?php

namespace Database\Factories;

use App\Models\UserDetail;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::all();
        return [
            'user_id' => $this->faker->unique()->numberBetween(1, $users->count()),
            'company_name' => $this->faker->company,
            'contact_email' => $this->faker->unique()->safeEmail,
            'tel' => $this->faker->phoneNumber,
            'description' => $this->faker->realText,
        ];
    }

}
