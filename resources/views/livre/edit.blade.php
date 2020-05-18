@extends('layouts/master')
@section('content')
<form action="{{route('update',$livre->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <h1>EDITER livre</h1>
    <div class="form-group text-darka ">
        <label class="h3  " for="img">titre :</label> <br>
        <input class="form-control" value="{{$livre->titre}}"
        type="text" name="titre" class=" @error('titre') is-invalid @enderror" id="titre" >
        @error('titre')
            <div  class="alert alert-danger">{{  $message  }}</div>
        @enderror
    </div>
    <div class="form-group text-darka ">
        <label class="h3  " for="img">année :</label> <br>
    <input class="form-control" value="{{$livre->annee}}"
        type="text" name="annee" class=" @error('description') is-invalid @enderror" id="annee" >
        @error('description')
            <div  class="alert alert-danger">{{  $message  }}</div>
        @enderror
    </div>
    <div class="form-group text-darka ">
        <label class="h3  " for="img">auteur :</label> <br>
    <input class="form-control" value="{{$livre->auteur}}"
        type="text" name="auteur" class=" @error('description') is-invalid @enderror" id="auteur" >
        @error('description')
            <div  class="alert alert-danger">{{  $message  }}</div>
        @enderror
    </div>

    <div class="text-center">

        <button type="submit" class="btn btn-outline-dark">editer</button>
    </div>
</form>
@endsection