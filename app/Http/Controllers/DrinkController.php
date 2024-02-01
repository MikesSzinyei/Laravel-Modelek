<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;

class DrinkController extends Controller {
    
    public function getDrinks() {
        $drinks = Drink::all();

        return $drinks;
    }
}
