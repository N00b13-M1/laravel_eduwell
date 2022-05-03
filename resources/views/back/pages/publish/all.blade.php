@extends('back.layouts.app')
@section('content')
    @include('back.partials.banner')
    <div class="container">
        <h1 class="text-center services fs-1">Confirm Testimonials</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Testimonial</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Créateur</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonial as $item)
                    @if ($item->confirmed == 0)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->testimonial }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->position }}</td>
                            <td>{{ $user[$item->user_id-1]->name }}</td>
                            <td><form action="{{ route("publish.update", $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form></td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

