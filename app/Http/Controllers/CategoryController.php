<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
	public function index(Request $request)
	{
		return view('categories.index', [
			'categoriesList' => $this->categoriesList
		]);
	}

	public function show(int $id)
	{
		return view('categories.show', [
			'categories' => $categories
		]);
	}
}
