@extends('back.layouts.app')
@section('content')
    @include('back.partials.banner')
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

    <h1 class="text-center py-4">Services</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route("services.create") }}">Create</a>
                @foreach ($services as $service)
                    <tr>
                        <th scope="row">{{ $service->id }}</th>
                        <td><img src="{{ asset('assets/images/' . $service->logo)}}"></td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->description }}</td>
                        {{-- <td>
                            <a href="{{ route('joueurs.edit', $joueur) }}"><button class="btn btn-warning">Edit</button></a>
                        </td>
                        <td><form action="{{ route("joueurs.destroy", $joueur) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Deleted</button>
                        </form></td>
                        <td><a href="{{ route("joueurs.show", $joueur) }}"><button class="btn btn-primary">Show</button></a></td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    test
@endsection