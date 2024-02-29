<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http;

class WebCivilizationController extends Controller
{
    public function index()
    {
        $response = Http::get('http://your-api-url/civilizations');
        $civilizations = $response->json();

        return view('civilizations.index', compact('civilizations'));
    }
}
