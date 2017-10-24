@extends('layout')

@section('pageTitle')
    Persoonlijke Info: Laravel CV site Laurens Bourgeois
@stop


@section('title')
    Persoonlijke Info
@stop

@section('pageContent')
    <?php 
        echo "<table>";
            foreach ($arrPersoonlijk as $piItem => $piValue) {
                echo "<tr><td>$piItem</td><td>$piValue</td></tr>";
            }
        echo "</table>";
    ?>

    <!--
    <table>
        @foreach($arrPersoonlijk as $piItem => $piValue)
            {{ "<tr><td>$piItem</td><td>$piValue</td></tr>"}}
        @endforeach
    </table>
    -->
@stop