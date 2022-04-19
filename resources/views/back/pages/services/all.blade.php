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

<<<<<<< HEAD
    <h1 class="text-center py-4">Services</h1>
=======
>>>>>>> da86e31bd529cb3ed20dfd183bfd99ec128c97f7
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<<<<<<< HEAD
    test
@endsection
=======
@endsection


>>>>>>> da86e31bd529cb3ed20dfd183bfd99ec128c97f7
