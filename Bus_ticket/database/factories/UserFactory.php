<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \App\Faker\ETPhone($this->faker));

        // $region = $this->faker->region();
        $phone_no = $this->faker->phoneNumber();
        //$name = $this->faker->etname($region) . " " . $this->faker->etname($region);
        return [
            'name' => $this->faker->name(),
            'phone_no' => $phone_no,
            'region' => $this->faker->word(),
            'city' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    public function configure()
    {
        $this->faker->addProvider(new \App\Faker\ETAddress($this->faker));
        $this->faker->addProvider(new \App\Faker\ETPerson($this->faker));

        return $this->afterMaking(function (\App\Models\User $user) {
        })->afterCreating(function (\App\Models\User $user) {
            // $role = \App\Models\Role::find(random_int(1, 7));
            // $user->roles()->save($role);
            $name = $this->faker->etname($user->region) . " " . $this->faker->etname($user->region);
            $user->update([
                'name' => $name,
                'email' => $this->faker->unique()->etemail($name, random_int(111, 999)),
            ]);
        });
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
