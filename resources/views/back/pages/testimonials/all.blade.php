@extends('back.layouts.app')

@section('content')

@if (session()->has('question'))
    <div class="alert alert-warning">
        {{ session()->get('question') }}
        <button>Oui</button>
        <button>Non</button>
    </div>
@endif

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

    <h1 class="text-center py-4">Testimonial</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Testimonial</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route("testimonials.create") }}">Create</a>
                @foreach ($testimonial as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->testimonial }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->position }}</td>
                        <td>
                            <a href="{{ route('testimonials.edit', $item->id) }}">Edit</a>
                        </td>
                        <td><form action="{{ route("testimonials.destroy", $item->id) }}" method="post">
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
