@extends('back.layouts.app')
@section('content')
    <h1 class="text-center py-4">Edit Contact Info</h1>
    <div class="container">
        <form action="{{ route("contact.update", $contact) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $contact->adresse }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile" value="{{ $contact->mobile }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection