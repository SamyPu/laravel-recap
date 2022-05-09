@extends('back.layouts.app')
@section('content')
    <section id='multiple-column-form'>
        <div class='page-heading'>
            <h3>User Edit</h3>
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
                            <form class='form' action='{{ route('user.update', $user->id) }}' method='post'>
                                @csrf
                                @method('PUT')
                                <div class='row'>
                                    <div class='col-md-6 col-12'>
                                        <div class='form-group'>
                                            <label for='name'>Name</label>
                                            <input type='text' class='form-control' id='name' name='name' value='{{ $user->name }}'>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-12'>
                                        <div class='form-group'>
                                            <label for='email'>Email</label>
                                            <input type='email' class='form-control' id='email' name='email' value='{{ $user->email }}'>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-12'>
                                        <div class='form-group'>
                                            <label for='password'>Password</label>
                                            <input type='text' class='form-control' id='password' name='password' value='{{ $user->password }}'>
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