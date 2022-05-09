@extends('back.layouts.app')
@section('content')
    <section id='multiple-column-form'>
        <div class='page-heading'>
            <h3>Banner Edit</h3>
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
                            <form class='form' action='{{ route('banner.update', $banner->id) }}' method='post' enctype="multipart/form-data">
                                @csrf
                                <div class='row'>
                                    <div class='col-md-6 col-12'>
                                        <div class='form-group'>
                                            <label for='title'>Title</label>
                                            <input type='text' class='form-control' id='title' name='title' value='{{ $banner->title }}'>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-12'>
                                        <div class='form-group'>
                                            <label for='description'>Description</label>
                                            <textarea class='form-control' id='description' name='description'>{{ $banner->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-12'>
                                        <div class='form-group'>
                                            <label for='button_text_1'>Text Button 1</label>
                                            <input type='text' class='form-control' id='button_text_1' name='button_text_1' value='{{ $banner->button_text_1 }}'>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-12'>
                                        <div class='form-group'>
                                            <label for='button_text_2'>Text Button 2</label>
                                            <input type='text' class='form-control' id='button_text_2' name='button_text_2' value='{{ $banner->button_text_2 }}'>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-12'>
                                        <div class='form-group'>
                                            <label for='image'>Image</label>
                                            <input type='file' class='form-control' id='image' name='image'>
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