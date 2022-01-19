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
        if ($image = $request->file('image')) {
            $name = time() . '_' . $image->getClientOriginalName();

            $image->move('img', $name);
        }

        Slider::create([
            'heading' => $request->heading,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $name
        ]);

        return 'Created successfully';
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);


        return view('editslider', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);
        if ($image = $request->file('image')) {
            unlink(public_path() . "/img/" . $slider->image);
            $name = time() . '_' . $image->getClientOriginalName();

            $image->move('img', $name);
        }
        $slider->update([
            'heading' => $request->heading,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $name
        ]);

        return "Slider updated successfully";
    }
}
