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
    <div class="container">
        <h1 class="text-center services fs-1">Services</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Read</th>
                </tr>
            </thead>
            <tbody>
                <a class="text-center" href="{{ route("services.create") }}">Create</a>
                @foreach ($services as $service)
                    <tr>
                        <th scope="row">{{ $service->id }}</th>
                        <td><img src="{{ asset('assets/images/' . $service->logo)}}"></td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->description }}</td>
                        <td>
                            <a href="{{ route("services.show", $service) }}"><button class="btn btn-primary">Show</button>
                            </a>
                        </td> 
                        <td>
                            <a href="{{ route('services.edit', $service) }}">Edit</a>
                        </td>
                        <td><form action="{{ route("services.destroy", $service) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Deleted</button>
                        </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

