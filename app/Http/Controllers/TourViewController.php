<?php

namespace App\Http\Controllers;


use App\Models\Tours;
use Illuminate\Http\Request;

class TourViewController extends Controller
{
    protected $tour;
    public function __construct(){
        $this->tour = new Tours();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Tours::with('images')->get();
        return view('pages.tours.index')->with('tours', $response);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->tour->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Tours $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['tour'] = $this->tour->find($id);
        return view('pages.tours.edit')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tour = $this->tour->find($id);
        $tour->update(array_merge($tour->toArray(), $request->toArray()));
        return redirect('toursview');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tour = $this->tour->find($id);
        $tour->delete();
        return redirect('toursview');
    }
}
