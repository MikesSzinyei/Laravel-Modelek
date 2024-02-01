<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;

class DrinkController extends Controller {
    
    public function getDrinks() {
        $drinks = Drink::all();

        return $drinks;
    }

    public function getOneDrink($drinkName) {
        $drink = Drink::where("drink", $drinkName) ->first();

        return $drink;
    }

    public function updateDrink(Request $request) {

        $drink = Drink::find($request["id"]);
        $drink -> drink = $request["drink"];
        $drink -> amount = $request["amount"];

        $drink -> save();
        return $drink;
    }
    public function deleteDrink(Request $request) {
        $drink = Drink::find($request["id"]);

        $drink->delete();
        return $drink;

    }

    public function getDrinksWithAll() {
        $drink = Drink::with("type","package")->get();

        return $drink;
    }
}
