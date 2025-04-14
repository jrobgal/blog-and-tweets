<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Entry;

class GuestController extends Controller
{
    public function index()
	{
		//dd('GuestController');
		$entries = Entry::with('user')
		->orderByDesc('created_at')
		->orderByDesc('id')
		->paginate(10);
		return view('welcome', compact('entries'));
	}

	public function show(Entry $entryBySlug)
	{
		return view('entries.show', [
			'entry' => $entryBySlug
		]);
	}
}
