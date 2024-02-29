<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Civilization;
class ApiCivilizationController extends Controller
{
    public function index()
    {
        $civilizations = Civilization::all();
        return response()->json($civilizations);
    }

    public function show($id)
    {
        $civilization = Civilization::findOrFail($id);
        return response()->json($civilization);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            // other validation rules
        ]);

        $civilization = Civilization::create($data);
        return response()->json($civilization, 201);
    }

    public function update(Request $request, $id)
    {
        $civilization = Civilization::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string',
            // other validation rules
        ]);

        $civilization->update($data);
        return response()->json($civilization);
    }

    public function destroy($id)
    {
        $civilization = Civilization::findOrFail($id);
        $civilization->delete();
        return response()->json(null, 204);
    }
}
