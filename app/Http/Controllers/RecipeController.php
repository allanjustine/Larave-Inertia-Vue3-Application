<?php

namespace App\Http\Controllers;
use App\Models\Recipe;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index() {
        $recipes = Recipe::with('ingredients')->get();

        return inertia('Recipe',[
            'recipes' => $recipes
        ]);
    }
}
