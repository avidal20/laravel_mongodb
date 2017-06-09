<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Feature::all();
        return view('admin.features.index', ['features' => $features]);
    }

    public function sizes(){
        return view('admin.features.sizes');
    }

    public function colors(){
        dd("colors");
    }
}
