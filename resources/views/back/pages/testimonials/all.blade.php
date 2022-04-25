@extends('back.layouts.app')
@section('content')
    @include('back.partials.banner')
    <div class="container">
        <h1 class="text-center services fs-1">Testimonials</h1>
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
        @error('refused')
            <div class='alert alert-danger'>{{  $message }}</div>
        @enderror
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

