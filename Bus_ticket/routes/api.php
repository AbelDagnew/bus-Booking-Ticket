<?php

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/today', function () {
    return ['now' => date('2022-04-21')];
});

Route::get('/destinations', function () {
    $destinations = [];
    $routes = \App\Models\Route::select('from')->get();
    foreach ($routes as $key => $route) {
        if (($ic = array_search($route->from, $destinations)) !== FALSE) {
            continue;
        }
        array_push($destinations, $route->from);
    }
    return $destinations;
});

Route::get('/departures', function (Request $request) {
    return \App\Models\Route::where('from', $request->cityfrom)->get(['to']);
});

Route::get('/travels', function (Request $request) {
    if ($request->t_date == "") {
        $tommorow = date("Y-m-d", strtotime(date("Y-m-d") . ' + 1 days'));
        $ways = \App\Models\Way::date($tommorow)->route(1)->get();
        foreach ($ways as $key => $way) {
            $way->company_id = $way->company;
            $way->route_id = $way->route;
        }
        return $ways;
    } else {
        $t_date = date('Y-m-d', strtotime($request->t_date));
        $route = \App\Models\Route::where('from', $request->from)->where('to', $request->to)->first();
        $ways = \App\Models\Way::date($t_date)->route($route->id)->get();
        foreach ($ways as $key => $way) {
            $way->company_id = $way->company;
            $way->route_id = $way->route;
        }
        return $ways;
    }
});

Route::get('/company', function (Request $request) {
    return Company::first();
});

Route::get('/routes', function () {
    return \App\Models\Route::all();
});

Route::get('/way', function (Request $request) {
    return \App\Models\Way::first();
});

Route::get('/findcar', function (Request $request) {
    return \App\Models\CarWay::way($request->way)->filled(0)->first();
});

Route::get('/findsits', function (Request $request) {

    $current_free_car = \App\Models\CarWay::way(1)->filled(0)->first();
    if (!$current_free_car) {
        return [];
    }

    $sits = [
        "1" => 0,
        "2" => -1,
        "3" => 1,
        "4" => -1,
        "5" => -1,
        "6" => -1,
        "7" => -1,
        "8" => -1,
        "9" => 1,
        "10" => -1,
        "11" => -1,
        "12" => 0,
        "13" => -1,
        "14" => -1,
        "15" => -1,
        "16" => -1,
        "17" => -1,
        "18" => -1,
        "19" => -1,
        "20" => -1,
        "21" => -1,
        "22" => -1,
        "23" => -1,
        "24" => -1,
        "25" => -1,
        "26" => -1,
        "27" => -1,
        "28" => -1,
        "29" => -1,
        "30" => -1,
        "31" => -1,
        "32" => -1,
        "33" => -1,
        "34" => -1,
        "35" => -1,
        "36" => -1,
        "37" => -1,
        "38" => -1,
        "39" => -1,
        "40" => -1,
        "41" => -1,
        "42" => -1,
        "43" => -1,
        "44" => -1,
        "45" => -1,
        "46" => -1,
        "47" => -1,
        "48" => -1,
        "49" => -1,
    ];

    $reserveds = \App\Models\Sit::where('car_way_id', $current_free_car->id)->get(['sit_no', 'paid']);

    foreach ($reserveds as $key => $sit) {
        $sits[$sit->sit_no] = $sit->paid;
    }

    return $sits;
});
