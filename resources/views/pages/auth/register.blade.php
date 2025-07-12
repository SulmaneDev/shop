@extends('layouts.auth')
@section('title', 'Register - Authentication')
@section('content')
    <div class="account-content">
        <div class="login-wrapper register-wrap bg-img">
            <div class="login-content authent-content">
                <form action="{{ route('register.handle') }}" method="POST">
                    @csrf
                    <div class="login-userset">
                        <div class="login-userheading">
                            <h3>Register</h3>
                            <h4>Create New Dreamspos Account</h4>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Name <span class="text-danger"> *</span></label>
                            <input type="text" value="{{ old('name') }}" name="name"
                                class="form-control border-end-0 @error('name')
                                    is-invalid
                                @enderror">

                            @error('name')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
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
                        <div class="mb-3">
                            <label class="form-label">Confirm Password <span class="text-danger"> *</span></label>
                            <input type="password" name="password_confirmation"
                                class="pass-inputs form-control @error('password_confirmation')
                                    is-invalid
                                @enderror">

                            @error('password_confirmation')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-login">
                            <button type="submit" class="btn btn-login">Sign Up</button>
                        </div>
                        <div class="signinform">
                            <h4>Already have an account ? <a href="{{route('login')}}" class="hover-a">Sign In Instead</a></h4>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
