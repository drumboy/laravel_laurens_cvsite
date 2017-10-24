<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB; //import DB class
use App\Werkervaring;



class WerkervaringController extends Controller
{
    //index
	public function index()
	{
		//haal alle werkervaringen op uit de DB met tabel werkervaringen
		//$werkervaringen = DB::table('werkervarings')->get();

		//Met model Werkervaring
		$werkervaringen = Werkervaring::all();

		return view('pages.werkervaringen.index', compact('werkervaringen'));
	}

	public function show(Werkervaring $werkervaring)
	{
		//$werkervaring = Werkervaring::find($id);
		//return $werkervaring;

		return View('pages.werkervaringen.show', compact('werkervaring'));
	}

}
