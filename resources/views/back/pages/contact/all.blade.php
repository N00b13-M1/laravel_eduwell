@extends('back.layouts.app')
@section('content')
    @include('back.partials.banner')
    <div class="container">
        <h1 class="text-center services fs-1">Contact</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Adresse</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Mobile</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <th scope="row">{{ $contact[0]->adresse }}</th>
                        <td>{{ $contact[0]->phone }}</td>
                        <td>{{ $contact[0]->mobile }}</td>
                        <td>
                            <a href="{{ route('contact.edit', $contact[0]) }}">Edit</a>
                        </td>
                    </tr>
            </tbody>
            <iframe
                    src="{{ url("https://maps.google.com/maps?q=".$contact[0]->adresse."&t=&z=17&ie=UTF8&iwloc=&output=embed") }}"
                    width="100%" height="420px" frameborder="0"
                    style="border:0; border-radius: 15px; position: relative; z-index: 2;"
                    allowfullscreen="">
            </iframe>
        </table>
    </div>
@endsection
