@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>User</h1>
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
        @if (session()->has('error'))
            <div class='alert alert-danger'>
                {{ session()->get('error') }}
            </div>
        @endif
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Name</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Password</th>
                    <th scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td scope='row'>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>********</td>
                        <td>
                            <div class='d-flex'>
                                <form action='{{ route('user.destroy', $user->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class='btn btn-danger mx-1' type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary mx-1' href='{{ route('user.edit', $user->id) }}'
                                    role='button'>Edit</a>
                                <a class='btn btn-primary mx-1' href='{{ route('user.show', $user->id) }}'
                                    role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
