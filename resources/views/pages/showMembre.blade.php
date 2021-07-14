@extends('layout.index')
@section('main')
<div class="card">
    <div class="card-body text-center">
        <h5 class="card-title">{{ $show->nom }}</h5>
        <p class="card-text">{{ $show->age }}</p>
        <p class="card-text">{{ $show->genre }}</p>
        <form action="/deleteMembre/{{ $show->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>
        <a href="/editMembre/{{ $show->id }}" class="btn btn-warning">Edit</a>
    </div>
</div>
@endsection