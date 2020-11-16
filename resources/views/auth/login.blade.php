@extends('layouts.layout-auth')
@section('title', 'Login')
@section('content')
  <p class="login-card-description">Sign into your account</p>
    <form method="POST" action="{{ route('login') }}" >
      
      @csrf 

      <div class="form-group">
        <label for="email" class="sr-only">Email</label>
        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
      </div>
      <div class="form-group mb-4">
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="***********">
          @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
      </div>
      <button type="submit" name="login" id="login" class="btn btn-block login-btn mb-4">
        {{ __('Login') }}
      </button>
    </form>
    <a href="#!" class="forgot-password-link">Forgot password?</a>
    <p class="login-card-footer-text">Don't have an account? <a href="{{ route('register') }}" class="text-reset">Register here</a></p>
@endsection              