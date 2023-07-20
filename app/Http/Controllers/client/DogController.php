<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;

class DogController extends Controller
{
    public function index()
    {
        return view('pages.client.dogs.small-dog');
    }
}
