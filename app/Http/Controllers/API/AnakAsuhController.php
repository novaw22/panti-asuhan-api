<?php

namespace App\Http\Controllers;

use App\Models\AnakAsuh;
use Illuminate\Http\Request;

class AnakAsuhController extends Controller
{
    public function index()
    {
        return AnakAsuh::all();
    }

    public function show($id)
    {
        return AnakAsuh::findOrFail($id);
    }

    public function store(Request $request)
    {
        return AnakAsuh::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $anakAsuh = AnakAsuh::findOrFail($id);
        $anakAsuh->update($request->all());
        return $anakAsuh;
    }

    public function destroy($id)
    {
        $anakAsuh = AnakAsuh::findOrFail($id);
        $anakAsuh->delete();
        return response()->json(['message' => 'Anak Asuh deleted']);
    }
}