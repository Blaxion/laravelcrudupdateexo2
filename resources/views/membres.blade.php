@extends('layout.index')
@section('main')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                <th scope="col">Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($membres as $membre)
                <tr>
                    <th scope="row">{{ $membre->id }}</th>
                    <td><a href="/showMembre/{{ $membre->id }}">{{ $membre->nom }}</a></td>
                    <td>{{ $membre->age }}</td>
                    <td>{{ $membre->genre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
