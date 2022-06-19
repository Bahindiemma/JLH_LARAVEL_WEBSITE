<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    
    public function index()
    {
        $data['settings'] = Settings::orderBy('id', 'desc')->paginate(5);
        return view('admin.settings', $data);
    }
    
    public function create()
    {
        return view('settings.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'email' => 'required',
            'address' => 'required'
        ]);
        $settings = new Settings();
        $settings->title = $request->title;
        $settings->email = $request->email;
        $settings->address = $request->address;
        $settings->save();
        return redirect()->route('settings.index')
            ->with('success', 'Settings has been created successfully.');
    }
    
    public function show(Settings $settings)
    {
        return view('settings.show', compact('settings'));
    }

    public function edit(Settings $settings)
    {
        return view('settings.edit', compact('settings'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        $settings = Settings::find($id);
        $settings->title = $request->title;
        $settings->email = $request->email;
        $settings->address = $request->address;
        $settings->save();
        return redirect()->route('settings.index')
            ->with('success', 'Settings Has Been updated successfully');
    }
   
    public function destroy(Settings $settings)
    {
        $settings->delete();
        return redirect()->route('settings.index')
            ->with('success', 'Settings has been deleted successfully');
    }
}
