@extends('layouts.layout-auth')
@section('title', 'Register')
@section('content')

  <p class="login-card-description">Let's create your account</p>
    <form method="POST" action="{{ route('register') }}" >
      
      @csrf 
      
      <div class="form-group">
        <label for="nama" class="sr-only">Nama</label>
        <input type="text" id="nama" placeholder="Nama" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
      </div>
      <div class="form-group">
        <label for="email" class="sr-only">Email</label>
        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address">
          @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
          @enderror
      </div>
      <div class="form-group mb-4">
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="***********">
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
      </div>
      <div class="form-group mb-4">
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="***********">

      </div>
      <button type="submit" name="login" id="login" class="btn btn-block login-btn mb-4">
        {{ __('Register') }}
      </button>
    </form>
      <!-- <a href="#!" class="forgot-password-link">Forgot password?</a> -->
    <p class="login-card-footer-text">Have an account? <a href="{{ route('login') }}" class="text-reset">Login</a></p>
  
  @endsection