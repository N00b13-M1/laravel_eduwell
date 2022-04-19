@extends('back.layouts.app')
@section('content')
    <h1 class="text-center py-4">Edit Title</h1>
    <div class="container">
        <form action="{{ route("titles.update", $title) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="smallTitle" class="form-label">Small Title</label>
                <input type="text" class="form-control" id="smallTitle" name="smallTitle" value="{{ $title->smallTitle }}">
            </div>
            <div class="mb-3">
                <label for="bigTitle" class="form-label">Big Title</label>
                <input type="text" class="form-control" id="bigTitle" name="bigTitle" value="{{ $title->bigTitle }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $title->description }}">
            </div>
            <div class="mb-3">
                <label for="buttontext" class="form-label">Button Text</label>
                <input type="text" class="form-control" id="buttontext" name="buttontext" value="{{ $title->buttontext }}">
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input type="text" class="form-control" id="img" name="img" value="{{ $title->img }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection


