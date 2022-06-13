<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Company;
use App\Models\Way;
use Illuminate\Database\Eloquent\Factories\Factory;

class WayFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Way::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        // for($i = 1 ; $i < 8 ; $i++){
        //     array_push($dates , getdate(strtotime(Company::first()->created_at . ' + ' . $i . ' days'))['weekday']);
        // }
        // $companies = Company::all();
        // foreach ($companies as $key => $c) {
        //     $today = date("Y-m-d H:i:s");
        //     for ($i = 1; $i < 8; $i++) {
        //         $day = date("Y-m-d H:i:s", strtotime($today . ' + ' . $i . ' days'));
        //         foreach ($c->routes as $key => $cr) {
        //             Way::factory(['route_id' => $cr->id, 'company_id' => $c->id, 't_date' => $day])->create();
        //         }
        //     }
        // }

        $price = random_int(650, 700);
        if ($price % 5 != 0) {
            $price = floor($price / 5) * 5;
        }
        return [
            'price' => $price
        ];
    }

    public function configure()
    {

        return $this->afterMaking(function (\App\Models\Way $way) {
        })->afterCreating(function (\App\Models\Way $way) {
            if (date('Y-m-d', strtotime($way->t_date)) == date('Y-m-d', strtotime(date("Y-m-d") . ' + 1 days'))) {
                $car_per_route = floor($way->company->cars->count() / $way->company->routes->count());

                $avelable_cars = $this->GetAvelableCars($way);

                for ($i = 0; $i < $car_per_route; $i++) {
                    $way->cars()->save(Car::find($avelable_cars[$i]));
                }
            } else {
                $cars = $way->company->waysByDateAndRoute(date('Y-m-d', strtotime($way->t_date . ' - 1 days')), $way->route_id % 2 == 1 ? $way->route_id + 1 :  $way->route_id - 1)->first()->cars;
                $way->cars()->saveMany($cars);
            }
        });
    }

    public function GetAvelableCars(\App\Models\Way $way)
    {
        $all_cars = array_column($way->company->cars->toarray(), 'id');

        $allcarway = array_column($way->company->carways->toarray(), 'car_id');

        $free_cars = array_values(array_diff($all_cars, $allcarway));

        return $free_cars;
    }
}
