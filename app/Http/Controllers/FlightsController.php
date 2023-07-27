<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Http\Requests\FlightPostRequest;
use Illuminate\Auth\Events\Validated;

class FlightsController extends Controller
{
    //
    public function index() {
        $flight = Flight::paginate(12);
        return view('index', ['flights'=> $flight]);
    }
    public function show(Flight $flight) {
        return "Hello";
    }
    public function create() {
        return view('flight-form');
    }
    public function store(FlightPostRequest $request) {
        $flight = new Flight;
        $flight->create($request->all());

        return redirect()->route('flight.index');        
        // $passenger = $request->passengers;
        // $departure = $request->departures;

        // dd([$passenger, $departure]);
    }
    public function edit(Flight $flight) {
        return "Hello";
    }
    public function update(Flight $flight) {
        return "Hello";
    }
    public function destroy(Flight $flight) {
        return "Hello";
    }
}