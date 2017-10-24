@extends('layout')

@section('pageTitle')
	Werkervaringen - Index: Laravel CV site Laurens Bourgeois
@stop

@section('title')
	Werkervaringen - Index
@stop

@section('pageContent')
	@foreach ($werkervaringen as $werkervaring)
		<div>
			<a href="/werkervaringen/{{ $werkervaring->id }}" target="_self">{{ $werkervaring->bedrijf }}</a>
		</div>
	@endforeach
@stop