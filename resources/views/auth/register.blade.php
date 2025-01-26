@extends('layout.auth')

@section('content')

<div class="col-md-12 col-lg-10" id="register">
    <div class="wrap d-md-flex">
        <div class="img" style="background-image: url({{url ('assets/img/hero-carousel/hero-carousel-3.jpg')}})"></div>
        <div class="login-wrap p-4 p-md-5">
            <div class="d-flex">
                <div class="w-100">
                    <h3 class="mb-4">Register</h3>
                </div>
            </div>
            <form class="signin-form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group mb-3">
                    <label class="label">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" value="{{ old('username') }}" required>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="label">Konfirmasi Password</label>
                    <input type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-4">Sign Up Now</button>
                <a href="{{ route('login') }}" class="btn btn-signup btn-block mt-2">Back to Sign In</a>
            </form>
        </div>
    </div>
</div>


@endsection
