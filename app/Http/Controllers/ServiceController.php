<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create()
    {
        return view('servicecreate');
    }

    public function store(Request $request)
    {
        Service::create($request->all());

        return 'Service created successfully';
    }
}
