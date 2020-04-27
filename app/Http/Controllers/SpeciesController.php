<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Species;

class SpeciesController extends Controller
{
    public function show()
    {
    	$data = Species::all();
    	// $data = Species::where('region', "Victoria")->get();
        return response()->json($data);
    }

    public function getRecordsByRegion(String $region, String $species)
    {
    	// $data = Species::all();
    	if ($region == null)
    	{
    		$region = "Victoria";
    	}

    	if ($region == null)
    	{
    		$region = "Great Glider";
    	}

    	$data = Species::where('region', $region)->where('common_name', $species)->get();
        return response()->json($data);
    }
}
