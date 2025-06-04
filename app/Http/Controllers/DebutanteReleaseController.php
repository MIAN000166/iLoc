<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DebutanteRelease;


class DebutanteReleaseController extends Controller
{
            // Get all records
            public function index()
            {
                return response()->json(['status'=>true, 'data'=> DebutanteRelease::all()], 200);
            }

            // Store a new record
            public function store(Request $request)
            {
                $request->validate([
                    'model_name' => 'required|string|max:255',
                    'email' => 'required|email|max:255',
                    'date' => 'required|date',
                    'signature' => 'required|string',
                ]);

                $release = DebutanteRelease::create($request->all());

                return response()->json(['status'=>true, 'data'=> $release], 201);
            }
}
