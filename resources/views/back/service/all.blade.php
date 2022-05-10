@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Service</h1>
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
        {{-- @if (session()->has('error'))
            <div class='alert alert-danger'>
                {{ session()->get('error') }}
            </div>
        @endif --}}
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Title</th>
                    <th scope='col'>Description</th>
                    <th scope='col'>Link Button</th>
                    <th scope='col'>Icone</th>
                    <th scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td scope='row'>{{ $service->id }}</td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->button_link }}</td>
                        <td>
                            @if ($service->icon == 'first')
                                <img src="{{ asset('images/service-icon-01.png') }}" alt="">
                            @elseif ($service->icon == 'second')
                                <img src="{{ asset('images/service-icon-02.png') }}" alt="">
                            @elseif ($service->icon == 'third')
                                <img src="{{ asset('images/service-icon-03.png') }}" alt="">
                            @elseif ($service->icon == 'fourth')
                                <img src="{{ asset('images/service-icon-04.png') }}" alt="">
                            @endif
                        </td>
                        <td>
                            <div class='d-flex'>
                                <form action='{{ route('service.destroy', $service->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class='btn btn-danger mx-1' type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary mx-1' href='{{ route('service.edit', $service->id) }}'
                                    role='button'>Edit</a>
                                <a class='btn btn-primary mx-1' href='{{ route('service.show', $service->id) }}'
                                    role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
