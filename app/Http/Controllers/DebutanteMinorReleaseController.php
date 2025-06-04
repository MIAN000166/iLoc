<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DebutanteMinorRelease;

class DebutanteMinorReleaseController extends Controller
{
        // Get all records
        public function index()
        {
            return response()->json(['status'=>true, 'data'=> DebutanteMinorRelease::all()], 200);
        }

        // Store a new record
        public function store(Request $request)
        {
            $request->validate([
                'minor_name' => 'required|string|max:255',
                'parent_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'date' => 'required|date',
                'signature' => 'required|string',
            ]);

            $release = DebutanteMinorRelease::create($request->all());

            return response()->json(['status'=>true, 'data'=> $release], 201);
        }
}
