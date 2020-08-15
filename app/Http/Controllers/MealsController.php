<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealsController extends Controller
{
    public function meal()
    {
        return view('book.meal');
    }
}
