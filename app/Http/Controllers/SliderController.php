<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function create()
    {
        return view('slidercreate');
    }

    public function store(Request $request)
    {
        Slider::create([
            'heading' => $request->heading,
            'title' => $request->title,
            'description' => $request->description
        ]);

        return 'Created successfully';
    }
}
