<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\User;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    //

    public function index(){
        $airlines = response()->json(Airline::all());
        return $airlines;
    }

    public function show($id){
        $airlines = response()->json(Airline::find($id));
        return $airlines;
    }

    public function destroy($id){
        Airline::find($id)->delete();
    }
    
    public function store(Request $request){
        $airlines = new Airline();
        $airlines-> name = $request->name;
        $airlines-> country = $request->country;
        $airlines-> save();
    }

    public function update(Request $request, $id){
        $airlines = Airline::find($id);
        $airlines-> name = $request->name;
        $airlines-> country = $request->country;
        $airlines-> save();
    }

    public function newView(){
        $users = User::all();
        return view('airline.new', ['users' => $users]);
    }
    public function editView($id){
        $users = User::all();
        $airline = Airline::find($id);
        return view('airline.edit', ['users' => $users, 'airline' => $airline]);
    }

    public function listView(){
        $airline = Airline::all();
        return view('airline.list', ['airline' => $airline]);
    }
}
