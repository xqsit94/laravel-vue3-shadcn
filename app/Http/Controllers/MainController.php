<?php

namespace App\Http\Controllers;

use Inertia\Response;

class MainController extends Controller
{
    public function index(): Response
    {
        return inertia('index');
    }
}
