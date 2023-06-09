@extends('templates.main_auth')
@section('title', 'Login')
@section('content')
<div class="main d-flex justify-content-center align-items-center">
    <div class="login-box">
        <form action="" method="POST">
            @csrf
            <div class="text-center">
                <div class="d-flex m-3">
                    <a href="/" class="btn btn-warning"><i class='bx bx-arrow-back'></i>Kembali</a>
                </div>
                <h1>LOGIN</h1>
                        @if (Session('status'))
            <div class="alert alert-success">
                {{Session('message')}}
            </div>
            @elseif (Session('error'))
    <div class="alert alert-danger">
        {{ Session('error') }}
    </div>
            @endif
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">username</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mt-3">
                    <button type="submit" class="btn btn-success form-control"> LOGIN </button>
                    </div>
                </form>
            </div>
        </div>
@endsection
@include('sweetalert::alert')
