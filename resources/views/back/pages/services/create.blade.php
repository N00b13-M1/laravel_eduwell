@extends('back.layouts.app')
@section('content')
    <h1 class="text-center py-4">Create Service</h1>
    <div class="container">
        <form action="{{ route("services.store") }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <input type="text" class="form-control" id="logo" name="logo">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection