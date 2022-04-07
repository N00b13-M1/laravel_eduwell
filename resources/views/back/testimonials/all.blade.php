@extends('back/layouts/app')

@section('content-back')

@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if (session()->has('erreur'))
    <div class="alert alert-danger">
        {{ session()->get('erreur') }}
    </div>
@endif


    <h1 class="text-center py-4">Joueurs</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Joeur_id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Origine</th>
                    <th scope="col">Poste</th>
                    <th scope="col">Equipe</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route("joueurs.create") }}">Create</a>
                @foreach ($joueurs as $joueur)
                    <tr>
                        <th scope="row">{{ $joueur->id }}</th>
                        <td>{{ $joueur->lastName }}</td>
                        <td>{{ $joueur->firstName }}</td>
                        <td>{{ $joueur->age }}</td>
                        <td>{{ $joueur->phone }}</td>
                        <td>{{ $joueur->email }}</td>
                        <td>{{ $joueur->gender }}</td>
                        <td>{{ $joueur->origin }}</td>
                        <td>{{ $joueur->poste->name }}</td>
                        <td>{{ $joueur->equipe->name }}</td>
                        <td>
                            <a href="{{ route('joueurs.edit', $joueur) }}"><button class="btn btn-warning">Edit</button></a>
                        </td>
                        <td><form action="{{ route("joueurs.destroy", $joueur) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Deleted</button>
                        </form></td>
                        <td><a href="{{ route("joueurs.show", $joueur) }}"><button class="btn btn-primary">Show</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
