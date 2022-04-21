@extends('back.layouts.app')
@section('content')
    <h1 class="text-center py-4">Edit Service</h1>
    <div class="container">
        <form action="{{ route("services.update", $service) }}" method="POST">
            @csrf
            @method('put')
            {{-- <div>
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
                </select>
            </div> --}}
            <div class="mb-3">
                <div class='logo-group'>
                    <label for='logo-column'>Logo</label>
                    {{-- @if ($service->logo === 'service-icon-01.png') --}}
                        <div class='d-flex'>
                            <div class="form-check me-2">
                                <input class="form-check-input" type="radio" name="logo"
                                    id="flexRadioDefault1" value="service-icon-01.png">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    <img src="{{ '/assets/images/service-icon-01.png' }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="radio" name="logo"
                                    id="flexRadioDefault2" value="service-icon-02.png">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <img src="{{ '/assets/images/service-icon-02.png' }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="radio" name="logo"
                                    id="flexRadioDefault3" value="service-icon-03.png">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    <img src="{{ '/assets/images/service-icon-03.png' }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="radio" name="logo"
                                    id="flexRadioDefault4" value="service-icon-04.png">
                                <label class="form-check-label" for="flexRadioDefault4">
                                    <img src="{{ '/assets/images/service-icon-04.png' }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                        </div>
                    
                    {{-- @elseif ($service->logo === 'service-icon-02.png')
                        <div class='d-flex'>
                            <div class="form-check me-2">
                                <input class="form-check-input" type="radio" name="logo"
                                    id="flexRadioDefault1" value="service-icon-01.png" >
                                <label class="form-check-label" for="flexRadioDefault1">
                                    <img src="{{ '/assets/images/' . $services[0]->logo }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="radio" name="logo"
                                    id="flexRadioDefault2" value="service-icon-02.png"checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <img src="{{ '/assets/images/' . $services[1]->logo }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="radio" name="logo"
                                    id="flexRadioDefault3" value="service-icon-03.png">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    <img src="{{ '/assets/images/' . $services[2]->logo }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="radio" name="logo"
                                    id="flexRadioDefault4" value="service-icon-04.png">
                                <label class="form-check-label" for="flexRadioDefault4">
                                    <img src="{{ '/assets/images/' . $services[3]->logo }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                        </div>
                    
                    @elseif ($service->logo === 'service-icon-03.png')
                        <div class='d-flex'>
                            <div class="form-check me-2">
                                <input class="form-check-input" type="radio" name="logo"
                                    id="flexRadioDefault1" value="service-icon-01.png">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    <img src="{{ '/assets/images/' . $services[0]->logo }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="radio" name="logo"
                                    id="flexRadioDefault2" value="service-icon-02.png">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <img src="{{ '/assets/images/' . $services[1]->logo }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="radio" name="logo"
                                    id="flexRadioDefault3" value="service-icon-03.png" checked>
                                <label class="form-check-label" for="flexRadioDefault3">
                                    <img src="{{ '/assets/images/' . $services[2]->logo }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="radio" name="logo"
                                    id="flexRadioDefault4" value="service-icon-04.png">
                                <label class="form-check-label" for="flexRadioDefault4">
                                    <img src="{{ '/assets/images/' . $services[3]->logo }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                        </div>
                    
                    @elseif ($service->logo === 'service-icon-04.png')
                        <div class='d-flex'>
                            <div class="form-check me-2">
                                <input class="form-check-input" type="radio" name="logo"
                                    id="flexRadioDefault1" value="service-icon-01.png">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    <img src="{{ '/assets/images/' . $services[0]->logo }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="radio" name="logo"
                                    id="flexRadioDefault2" value="service-icon-02.png">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <img src="{{ '/assets/images/' . $services[1]->logo }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="radio" name="logo"
                                    id="flexRadioDefault3" value="service-icon-03.png">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    <img src="{{ '/assets/images/' . $services[2]->logo }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="radio" name="logo"
                                    id="flexRadioDefault4" value="service-icon-04.png" checked>
                                <label class="form-check-label" for="flexRadioDefault4">
                                    <img src="{{ '/assets/images/' . $services[3]->logo }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                        </div>
                    @endif --}}
                </div>
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