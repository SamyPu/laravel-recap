@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Banner</h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Title</th>
                    <th scope='col'>Description</th>
                    <th scope='col'>Text Button 1</th>
                    <th scope='col'>Text Button 2</th>
                    <th scope='col'>Image</th>
                    <th scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($banners as $banner)
                    <tr>
                        <td scope='row'>{{ $banner->id }}</td>
                        <td>{{ $banner->title }}</td>
                        <td>{{ $banner->description }}</td>
                        <td>{{ $banner->button_text_1 }}</td>
                        <td>{{ $banner->button_text_2 }}</td>
                        <td>
                            <img src='{{ asset("images/" . $banner->image) }}' alt='{{ $banner->title }}' width='100'>
                        <td>
                            <div class='d-flex'>
                                <a class='btn btn-primary mx-1' href='{{ route('banner.edit', $banner->id) }}'
                                    role='button'>Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection