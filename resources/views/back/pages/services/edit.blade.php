@extends('back.layouts.app')
@section('content')
    <h1 class="text-center py-4">Edit Service</h1>
    <div class="container">
        <form action="{{ route("services.update", $service) }}" method="POST">
            @csrf
            @method('put')
            <div>
                <label for="logo" class="form-label">Logo</label>
                <select name="logo" class="form-control w-50">
                    <option>Pick your Logo</option>
                        <option value="service-icon-01.png">
                            Logo 1
                        </option>
                        <option value="service-icon-02.png">
                            Logo 2
                        </option>
                        <option value="service-icon-03.png">
                            Logo 3
                        </option>
                        <option value="service-icon-04.png">
                            Logo 4
                        </option>
                    <!--selected by default-->
                    {{-- @foreach ($services as $service)
                        <option value="{{ $service->id }}">
                            {{ $service->logo }}
                        </option>
                    @endforeach --}}
                    {{-- @for ($i = 0; $i < 4; $i++)
                        <option value="service-icon-04.png">
                            service-icon-04.png
                        </option>
                    @endfor --}}
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $service->description }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
