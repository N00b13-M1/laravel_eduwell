@extends('back.layouts.app')
@section('content')
    <h1 class="text-center py-4">Show Service</h1>
    <div class="container">
        <form action="{{ route("services.index") }}" method="get">
            @csrf
            <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <input type="text" class="form-control" id="logo" name="logo" value="{{ $service->logo }}" readonly>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}" readonly>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $service->description }}" readonly>
            </div>
            <button type="submit" class="btn btn-primary m-2">Return</button>
        </form>
        <td>
            <button type="submit" class="btn btn-primary m-2"><a href="{{ route('services.edit', $service) }}">Edit</a></button>
        </td>
        <td>
            <form action="{{ route("services.destroy", $service) }}" method="post">
            @csrf
            @method('DELETE')

            <button class="btn btn-danger m-2" type="submit">Deleted</button>
            </form>
        </td>
    </div>
@endsection
