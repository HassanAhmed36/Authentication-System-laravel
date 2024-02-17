@extends('layout.auth_master')
@section('main_section')
<div>
    <h3 class="fw-semibold">Login to your account 😍</h3>
    <br>
    <div>
        <form action="{{ route('submit.login') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12 mb-3">
                    <label for="" class="form-label">email</label>
                    <input type="text" name="email" placeholder="examle@gmail.com" class="form-control">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12 mb-3">
                    <label for="" class="form-label">password</label>
                    <input type="password" name="password"  class="form-control">
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12 mb-3 d-flex justify-content-between flex-wrap gap-2">
                    <span>don't have an account? <a href="{{ route('register') }}">Register now</a></span>
                    <span><a href="{{ route('forget.password') }}">forget password?</a></span>
                </div>
                <div class="col-12 mb-3">
                    <button type="submit" class="btn btn-dark">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
