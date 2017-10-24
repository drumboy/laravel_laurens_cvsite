@extends('layout')

@section('pageTitle')
    Opleidingen: Laravel CV site Laurens Bourgeois
@stop


@section('title')
    Opleidingen
@stop

@section('pageContent')
    <?php 
        echo "<table>";
            foreach ($arrOpleidingen as $oplItem => $oplValue) {
                echo "<tr><td>$oplItem</td><td>$oplValue</td></tr>";
            }
        echo "</table>";
    ?>
@stop