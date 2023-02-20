@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-5 mt-5">
            <main class="form-registration">
                <form action="/register" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" name="name" id="name" placeholder="name" value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="username"  value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com"  value="{{ old('email') }}">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password"  value="{{ old('password') }}">
                    <label for="password">Password</label>
                    @error('password')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-success mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-2">Already Registered? <a href="/login">Login</a></small>
            </main>
        </div>
    </div>
@endsection

