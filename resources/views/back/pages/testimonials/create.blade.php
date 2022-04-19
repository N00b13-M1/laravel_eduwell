@extends('back.layouts.app')
@section('content')
    <h1 class="text-center py-4">Créer testimonial</h1>
    <div class="container">
        <form action="{{ route("testimonials.store") }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="testimonial" class="form-label">testimonial</label>
                <input type="text" class="form-control" id="testimonial" name="testimonial">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">position</label>
                <input type="text" class="form-control" id="position" name="position">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection