@extends('back.layouts.app')

@section('content')
    <h1 class="text-center py-4">Edit testimonial</h1>
    <div class="container">
        <form action="{{ route("testimonials.update", $testimonial->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="testimonial" class="form-label">testimonial</label>
                <input type="text" class="form-control" value="{{ $testimonial->testimonial }}" id="testimonial" name="testimonial">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Icone</label>
                <input type="text" class="form-control" value="{{ $testimonial->name }}" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">position</label>
                <input type="text" class="form-control" value="{{ $testimonial->position }}" id="position" name="position">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection