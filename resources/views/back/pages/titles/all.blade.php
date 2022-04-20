@extends('back.layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center services fs-1">Titles</h1>
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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Small Title</th>
                    <th scope="col">Big Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Button Text</th>
                    <th scope="col">Image</th>
                    <th scope="col">Read</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($titles as $title)
                    <tr>
                        <th scope="row">{{ $title->id }}</th>
                        <th scope="row">{{ $title->smallTitle }}</th>
                        <th scope="row">{{ $title->bigTitle }}</th>
                        <th scope="row">{{ $title->description }}</th>
                        <th scope="row">{{ $title->buttontext }}</th>
                        <td><img src="{{ asset('assets/images/' . $title->img)}}"></td>
                        <td>
                            <a href="{{ route("titles.show", $title) }}"><button class="btn btn-primary">Show</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection