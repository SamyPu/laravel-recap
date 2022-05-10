@extends('back.layouts.app')
@section('content')
    <section id='multiple-column-form'>
        <div class='page-heading'>
            <h3>Service Create</h3>
        </div>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul class='mb-0'>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class='row match-height'>
            <div class='col-12'>
                <div class='card'>
                    <div class='card-content'>
                        <div class='card-body'>
                            <form class='form' action='{{ route('service.store') }}' method='post'>
                                @csrf
                                <div class='row'>
                                    <div class='col-md-6 col-12'>
                                        <div class='form-group'>
                                            <label for='title'>Title</label>
                                            <input type='text' class='form-control' id='title' name='title'
                                                value='{{ old('title') }}'>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-12'>
                                        <div class='form-group'>
                                            <label for='description'>Description</label>
                                            <input type='description' class='form-control' id='description'
                                                name='description' value='{{ old('description') }}'>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-12'>
                                        <div class='form-group'>
                                            <label for='button_link'>Link Button</label>
                                            <input type='text' class='form-control' id='button_link' name='button_link'
                                                value='{{ old('button_link') }}'>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-12 d-flex align-items'>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="radio" name="icon" value="first"
                                                id="icon1">
                                            <label class="form-check-label" for="icon">
                                                <img src="{{ asset("images/service-icon-01.png") }}" alt="">
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="radio" name="icon" value="second"
                                                id="icon1">
                                            <label class="form-check-label" for="icon">
                                                <img src="{{ asset("images/service-icon-02.png") }}" alt="">
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="radio" name="icon" value="third"
                                                id="icon1">
                                            <label class="form-check-label" for="icon">
                                                <img src="{{ asset("images/service-icon-03.png") }}" alt="">
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="radio" name="icon" value="fourth"
                                                id="icon1">
                                            <label class="form-check-label" for="icon">
                                                <img src="{{ asset("images/service-icon-04.png") }}" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class='col-12 d-flex justify-content-end'>
                                        <button type='submit' class='btn btn-primary me-1 mb-1'>Submit</button>
                                        <button type='reset' class='btn btn-light-secondary me-1 mb-1'>Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
