<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $slider = Slider::first();
        $service = Service::first();
        return view('front', compact('slider', 'service'));
    }
}
