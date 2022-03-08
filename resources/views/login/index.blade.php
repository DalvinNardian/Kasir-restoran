@extends('layouts.login')
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                @if (session('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session ('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="container">
                    <main class="form-login">
                        <form action="{{ route('login.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h1 class="h3 mb-3 fw-normal">Login Cafee Bisa Ngopi Kuy</h1>
                            <div class="input-group flex-nowrap mt-2">
                                <span class="input-group-text"><i class="bi bi-tag-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Username" id="username" name="username">
                            </div>
                            <div class="input-group flex-nowrap mt-2">
                                <span class="input-group-text"><i class="bi bi-file-lock-fill"></i></span>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>
                            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Login</button>
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection