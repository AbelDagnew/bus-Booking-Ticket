<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vin' => 'ET' . sprintf("%05d", random_int(1, 99995)),
            'side_number' => random_int(1200, 9990),
            'name' => $this->faker->word(),
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (\App\Models\Car $car) {
            # code...
        })->afterCreating(function (\App\Models\Car $car) {
            $car_users = [];
            $driver = \App\Models\User::factory(['region' => 'Addis Ababa', 'city' => 'Addis Ababa'])->create();
            $driver_role = \App\Models\Role::find(3);
            $driver->roles()->save($driver_role);
            array_push($car_users, $driver);
            
            $assistant = \App\Models\User::factory(['region' => 'Addis Ababa', 'city' => 'Addis Ababa'])->create();
            $assistant_role = \App\Models\Role::find(4);
            $assistant->roles()->save($assistant_role);
            array_push($car_users, $assistant);

            $car->users()->saveMany($car_users);
            $car->company->users()->saveMany($car_users);
        });
    }
}
