<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    protected $roles = ['Campany Admin', 'System Admin', 'Driver', 'Assistant', 'Organizer', 'Ticket Officer', 'Customer'];
    //foreach($roles as $r){Role::create(['name' => $r]) ;}
    protected $routes = [
        ["from" => "Bahir Dar", "to" => "Addis Ababa"],
        ["to" => "Bahir Dar", "from" => "Addis Ababa"],
        ["from" => "Debre Markos", "to" => "Addis Ababa"],
        ["to" => "Debre Markos", "from" => "Addis Ababa"],
        ["from" => "Dessie", "to" => "Addis Ababa"],
        ["to" => "Dessie", "from" => "Addis Ababa"],
        ["from" => "Woldiya", "to" => "Addis Ababa"],
        ["to" => "Woldiya", "from" => "Addis Ababa"],
        ["from" => "Debre Berhan", "to" => "Addis Ababa"],
        ["to" => "Debre Berhan", "from" => "Addis Ababa"],
        ["from" => "Gondar", "to" => "Addis Ababa"],
        ["to" => "Gondar", "from" => "Addis Ababa"],
        ["from" => "Adama", "to" => "Addis Ababa"],
        ["to" => "Adama", "from" => "Addis Ababa"],
        ["from" => "Jimma", "to" => "Addis Ababa"],
        ["to" => "Jimma", "from" => "Addis Ababa"],
        ["from" => "Nekemte", "to" => "Addis Ababa"],
        ["to" => "Nekemte", "from" => "Addis Ababa"],
        ["from" => "Shashemene", "to" => "Addis Ababa"],
        ["to" => "Shashemene", "from" => "Addis Ababa"],
        ["from" => "Dire Dawa", "to" => "Addis Ababa"],
        ["to" => "Dire Dawa", "from" => "Addis Ababa"],
        ["from" => "Jigjiga", "to" => "Addis Ababa"],
        ["to" => "Jigjiga", "from" => "Addis Ababa"],
        ["from" => "Hawassa", "to" => "Addis Ababa"],
        ["to" => "Hawassa", "from" => "Addis Ababa"],
        ["from" => "Arba Minch", "to" => "Addis Ababa"],
        ["to" => "Arba Minch", "from" => "Addis Ababa"],
        ["from" => "Wolayita", "to" => "Addis Ababa"],
        ["to" => "Wolayita", "from" => "Addis Ababa"],
        ["from" => "Hosaena", "to" => "Addis Ababa"],
        ["to" => "Hosaena", "from" => "Addis Ababa"],
        ["from" => "Gambela", "to" => "Addis Ababa"],
        ["to" => "Gambela", "from" => "Addis Ababa"],
        ["from" => "Assosa", "to" => "Addis Ababa"],
        ["to" => "Assosa", "from" => "Addis Ababa"],
        ["from" => "Mekelle", "to" => "Addis Ababa"],
        ["to" => "Mekelle", "from" => "Addis Ababa"],
        ["from" => "Axum", "to" => "Woldiya"],
        ["to" => "Axum", "from" => "Woldiya"],
        ["from" => "Shire", "to" => "Woldiya"],
        ["to" => "Shire", "from" => "Woldiya"],
        ["from" => "Adwa", "to" => "Woldiya"],
        ["to" => "Adwa", "from" => "Woldiya"]
    ];
    //foreach ($routes as $r) { \App\Models\Route::create(['from' => $r['from'] , 'to' => $r['to']]); }
    protected $companies = [
        ['Abay', 'https://www.safaribay.net/wp-content/uploads/2018/07/Abay-Bus-Ethiopia.jpg'],
        ['Air', 'https://www.smagint.com/resources/contentfiles/product/LUXURYCOACH2-THUMB.jpg'],
        ['Ethio', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.safaribay.net%2Fethio-bus-addis-ababa-to-hawassa%2F&psig=AOvVaw32sQnDgh976qP1CIve4EhO&ust=1649851412476000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCMDUkNa9jvcCFQAAAAAdAAAAABAI'],
        ['Habesha', 'https://www.safaribay.net/wp-content/uploads/2020/05/Habesha-Bus-Ethiopia.jpg'],
        ['Gedda', 'https://www.safaribay.net/wp-content/uploads/2020/04/Odaa-Bus.jpg'],
        ['Golden', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.dreamstime.com%2Fillustration%2Fgolden-bus.html&psig=AOvVaw2AaHF35FrjZfes69AyMnNo&ust=1649851958483000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCNC40dS_jvcCFQAAAAAdAAAAABA2'],
        ['Kegna', 'https://image.made-in-china.com/2f0j00hUyGRZFCZApT/Yutong-Bus-47-Seat-Diesel-Engine-EU-3-Passenger-Coach.jpg'],
        ['Walya', 'https://static.wixstatic.com/media/65eb21_987f6af1065048c392c15ebe7b552aee~mv2.jpg/v1/fill/w_640,h_480,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/65eb21_987f6af1065048c392c15ebe7b552aee~mv2.jpg'],
        ['Yegna', 'https://media-eu.camilyo.software/media-eu/static/1229/374.jpg'],
        ['Zemen', 'https://www.safaribay.net/wp-content/uploads/2020/04/Zemen-Bus-Ethiopia..jpg']
    ];
    //foreach ($companies as $c) { Company::factory(['name' => $c[0] , 'icon' => $c[1] ])->create(); }
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->name(),
            'icon' => $this->faker->sentence()
        ];
    }

    public function configure()
    {
        $this->faker->addProvider(new \App\Faker\ETAddress($this->faker));

        return $this->afterMaking(function (\App\Models\Company $company) {
        })->afterCreating(function (\App\Models\Company $company) {
            $routes = \App\Models\Route::find($this->getRouteIndex());
            $company_users = [];
            $company->routes()->saveMany($routes);

            for ($i = 0; $i < $routes->count(); $i++) {
                \App\Models\Car::factory(['company_id' => $company->id])->count(random_int(1, 4))->create();
            }

            $company_admin = \App\Models\User::factory(['region' => 'Addis Ababa'])->create();

            $role = \App\Models\Role::find(1);
            $company_admin->roles()->save($role);

            array_push($company_users, $company_admin);
            $company_organizer = \App\Models\User::factory(['region' => 'Addis Ababa'])->create();

            $role = \App\Models\Role::find(5);
            $company_organizer->roles()->save($role);
            array_push($company_users, $company_organizer);
            $cities = array();

            foreach ($routes as $key => $route) {
                if (($ic = array_search($route->from, $cities)) !== FALSE) {
                    continue;
                }
                $tiket_officer = \App\Models\User::factory(['region' => $this->faker->regionByCity($route->from), 'city' => $route->from])->create();
                $role = \App\Models\Role::find(6);
                $tiket_officer->roles()->save($role);

                array_push($cities, $route->from);

                array_push($company_users, $tiket_officer);
            }

            $company->users()->saveMany($company_users);
        });
    }

    public function getRouteIndex()
    {
        $leng = random_int(4, 12);

        $indexes = array();

        for ($i = 0; $i < $leng; $i++) {
            $index = random_int(2, 44);
            if (($ic = array_search($index, $indexes)) !== FALSE) {
                continue;
            }
            if ($index % 2 == 0) {
                array_push($indexes, ($index - 1));
                array_push($indexes, $index);
            } else {
                array_push($indexes, $index);
                array_push($indexes, $index + 1);
            }
        }

        return $indexes;
    }
}
