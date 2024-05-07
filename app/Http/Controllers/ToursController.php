<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\TourResource;
use App\Models\Tours;
use App\Models\Images;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tours::with('images')->get();
        return TourResource::collection(Tours::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tour = Tours::create([
            'title' => $request->title,
            'type' => $request->type,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'price' => $request->price,
            'description' => $request->description,
            'ArDescription' => $request->ArDescription,
            'discount' => $request->discount,
        ]);

        return new TourResource($tour);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tours $room)
    {
        return new TourResource($room);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tours $tour)
    {
        $tour->update([
            'title' => $request->title,
            'type' => $request->type,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'price' => $request->price,
            'description' => $request->description,
            'ArDescription' => $request->ArDescription,
            'discount' => $request->discount,
        ]);

        return new TourResource($tour);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tours $tour)
    {
        return $tour->delete();
    }
}
