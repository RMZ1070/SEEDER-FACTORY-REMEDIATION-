@extends('layouts/master')
@section('content')
<div class="table-wrapper"> 
    <h1></h1>
    <a href="{{route('create')}}" class="btn btn-danger scrollto">create</a></td>


        <a href="{{route('welcome')}}" class="btn btn-primary scrollto">home</a></td>
<table class="table table-striped">
    
    <thead>
    <tr>
        <th scope="col" class="text-center">titre</th>
        <th scope="col" class="text-center">année</th>
        <th scope="col" class="text-center">auteur</th>
        <th scope="col" class="text-center">action</th>
    </tr>
</thead>
<tbody>
   
    <tr>
    <td class="text-center"  colspan=""><i class="{{$livre->titre}}" alt=""></i></td>
    <td class="text-center"  colspan="">{{$livre->annee}}</td>
    <td class="text-center"  colspan="">{{$livre->auteur}}</td>
        <td class="text-center d-flex justify-content-center"  colspan="">
            <a href="{{route('edit',$livre->id)}}" class="btn btn-warning scrollto mx-3">Edit</a>
            <form action="{{route('destroy',$livre->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger scrollto mx-3">Delete</button>
            </form>
            </td>
     
    </tr>

   
    <tbody>
        
</table>

 
</div>
@endsection