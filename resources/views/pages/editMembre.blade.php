@extends('layout.index')
@section('main')
<div class="container w-25">
    <form method="POST" action="/putMembre/{{$edit->id}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="texte" name='nom' value='{{$edit->nom}}'class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Age</label>
            <input type="number" name='age' value='{{$edit->age}}' class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <select class="form-select" name='genre' aria-label="Default select example">
                <option >Open this select menu</option>
                <option {{$edit->genre=="Homme"?'Selected':''}} value="Homme">Homme</option>
                <option {{$edit->genre=="Femme"?'Selected':''}} value="Femme">Femme</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection