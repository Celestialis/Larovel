<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        return view('about.index', [
            'aboutList' => $this->aboutList
        ]);
    }

    public function show(int $id)
    {
        return view('about.show', [
            'id' => $id
        ]);
    }
}
