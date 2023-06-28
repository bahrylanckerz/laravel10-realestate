<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    public function index()
    {
        $data['propertytype'] = PropertyType::all();
        return view('backend.propertytype.index', $data);
    }

    public function store(Request $request)
    {
        $rules = [
            'type' => 'required',
            'name' => 'required',
        ];
        $request->validate($rules);

        PropertyType::create([
            'type' => $request->type,
            'name' => $request->name,
        ]);

        $notification = [
            'alert-type' => 'success',
            'message'    => 'The property type created successfully',
        ];
        return redirect()->back()->with($notification);
    }
}
