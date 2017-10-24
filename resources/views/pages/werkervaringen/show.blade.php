@extends('layout')

@section('pageTitle')
	Werkervaringen - Show: Laravel CV site Laurens Bourgeois
@stop

@section('title')
	Werkervaringen - Show
@stop

@section('pageContent')
	<a href="/werkervaringen" target="_self">Keer Terug</a><br/><br/>
	<div>
		<table>
			<tr><td>Bedrijf: </td><td>{{ $werkervaring->bedrijf }}</td></tr>
			<tr><td>Periode: </td><td>{{ $werkervaring->periode }}</td></tr>
			<tr><td>Technologie: </td><td>{{ $werkervaring->technologie }}</td></tr>
		</table>
	</div>
@stop