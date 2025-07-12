@extends('layouts.auth')
@section('title', 'Login - Authentication')
@section('content')
    <div class="account-content">
        <div class="login-wrapper register-wrap bg-img">
            <div class="login-content authent-content">
                <form action="{{ route('login.handle') }}" method="POST">
                    @csrf
                    <div class="login-userset">
                        <div class="login-userheading">
                            <h3>Login</h3>
                            <h4>Login to your account</h4>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email <span class="text-danger"> *</span></label>
                            <input type="text" value="{{ old('email') }}" name="email"
                                class="form-control border-end-0 @error('email') is-invalid @enderror">
                            @error('email')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password <span class="text-danger"> *</span></label>
                            <input name="password" type="password"
                                class="pass-input form-control @error('password') is-invalid @enderror">

                            @error('password')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="form-login">
                            <button type="submit" class="btn btn-login">Sign In</button>
                        </div>
                        <div class="signinform">
                            <h4>Already not have an account ? <a href="{{ route('register') }}" class="hover-a">Sign Up
                                    Instead</a></h4>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
