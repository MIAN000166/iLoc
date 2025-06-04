<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PhotographerRelease;

class PhotographerReleaseController extends Controller
{
    // Get all records
    public function index()
    {
        return response()->json(['status'=>true, 'data'=>PhotographerRelease::all()], 200);
    }

    // Store a new record
    public function store(Request $request)
    {
        $request->validate([
            'debutante_name' => 'required|string|max:255',
            'business_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'signature' => 'required|string',
        ]);

        $release = PhotographerRelease::create($request->all());

        return response()->json(['status'=>true, 'data'=> $release], 201);
    }
}
