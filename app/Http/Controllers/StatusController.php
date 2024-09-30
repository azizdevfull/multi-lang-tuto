<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\StatusTranslation;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'translations' => 'required|array',
            'translations.*.language_id' => 'required|exists:languages,id',
            'translations.*.name' => 'required|string|max:255',
        ]);

        // Create the status
        $status = Status::create();

        $data = []; // Initialize an empty array to hold all translations data

        // Loop through translations and create them
        foreach ($request->translations as $translationData) {
            $data[] = [ // Append each translation to the data array
                'status_id' => $status->id,
                'language_id' => $translationData['language_id'],
                'name' => $translationData['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert all translations at once
        StatusTranslation::insert($data);

        return response()->json([
            'message' => 'Status created successfully',
            'status' => $status->load('translations') // Load translations after inserting
        ], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
