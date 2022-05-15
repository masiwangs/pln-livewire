<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrkController extends Controller
{
    public function create(Request $request) {
        $basket = $request->basket;

        return view('prk-create', compact('basket'));
    }
}
