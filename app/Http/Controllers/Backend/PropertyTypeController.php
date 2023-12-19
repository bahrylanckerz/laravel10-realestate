<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    public function index()
    {
        $data['title']        = 'Property Type';
        $data['propertytype'] = PropertyType::all();
        return view('backend.propertytype.index', $data);
    }

    public function create()
    {
        $data['title'] = 'Add New Property Type';
        return view('backend.propertytype.create', $data);
    }

    public function store(Request $request)
    {
        $rules = [
            'type' => 'required|unique:property_types,type_name',
            'icon' => 'required',
        ];
        $request->validate($rules);

        PropertyType::create([
            'type_name' => $request->type,
            'type_icon' => $request->icon,
        ]);

        $notification = [
            'alert-type' => 'success',
            'message'    => 'The property type created successfully',
        ];
        return redirect()->route('admin.propertytype')->with($notification);
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Property Type';
        $data['data']  = PropertyType::findOrFail($id);
        return view('backend.propertytype.edit', $data);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $rules = [
            'type' => 'required|unique:property_types,type_name,' . $id . ',id',
            'icon' => 'required',
        ];
        $request->validate($rules);

        PropertyType::findOrFail($id)->update([
            'type_name' => $request->type,
            'type_icon' => $request->icon,
        ]);

        $notification = [
            'alert-type' => 'success',
            'message'    => 'The property type updated successfully',
        ];
        return redirect()->route('admin.propertytype')->with($notification);
    }

    public function delete($id)
    {
        PropertyType::findOrFail($id)->delete();

        $notification = [
            'alert-type' => 'success',
            'message'    => 'The property type deleted successfully',
        ];
        return redirect()->back()->with($notification);
    }
}
