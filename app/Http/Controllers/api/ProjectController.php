<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index()
    {
        return response()->json([
            'name' => "Alessio",
            'city' => "Rome"

        ]);
    }
}
