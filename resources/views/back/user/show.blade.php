@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>User</h1>
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
                <tr>
                    <td scope='row'>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>********</td>
                    <td> 
                        <a class='btn btn-primary' href='{{ route('user.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection