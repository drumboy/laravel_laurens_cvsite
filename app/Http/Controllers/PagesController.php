<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //home
    public function home()
    {
    	return view("home");
    }

    //Persoonlijke info
    public function persoonlijk()
    {
    	//maak een associative array with personal data
		$arrPersoonlijk = [
			ucwords('naam') => "Laurens Bourgeois",
			ucwords('geboorte') => "10/10/1985",
			ucwords('email') => "<a href='mailto:laurens.bourgeois@telenet.be' target='_self'>laurens.bourgeois@telenet.be</a>",
			ucwords('gsm') => '0032477/34.47.03'
		];

		//var_dump($arrPersoonlijk); 
    	return view('pages.persoonlijke-info', compact('arrPersoonlijk'));
    }

    //Opleidingen
    public function opleidingen()
    {
    	//maak array met opleidingen
    	$arrOpleidingen = [
			ucwords('hogeschool') => "Bachelor <strong>Multimedia en Communicatie Technologie</strong> – Hogeschool West-Vlaanderen – Kortrijk (14/02/2011)",
			ucwords('secundair onderwijs') => "Handel – Sint-Paulusinstituut – Herzele"
		];

		//toon data in pagina opleidingen
		return view('pages.opleidingen', compact('arrOpleidingen'));
    }

}
