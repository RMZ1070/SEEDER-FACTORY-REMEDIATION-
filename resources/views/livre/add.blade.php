@extends('layouts/master')
@section('content')
<header class="bg-warning text-white text-center m-3 p-1">
    <h1>Formulaire Livre</h1>	
</header>

<div class="container bg-light p-3 text-center">

<div class="wrapper">
<form method="post" action="{{route('livreSend')}}" class="ccform">
    @csrf
    <div class="ccfield-prepend p-2">
        <input class="form-control" name="titre" type="text" placeholder="Titre" required>
    </div>
    <div class="ccfield-prepend p-2">
        <input class="form-control" name="annee" type="date" placeholder="annee" required>
    </div>
    <div class="ccfield-prepend p-2">
        <input class="form-control" name="auteur" type="text" placeholder="auteur" required>
    </div>
    <div class="ccfield-prepend">
        <input class="btn btn-warning" type="submit" value="Submit">
    </div>
    </form>
</div>
</div>
@endsection