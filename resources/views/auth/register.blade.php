@extends('layout.auth_master')
@section('main_section')
<div>
    <h3 class="fw-semibold">Register your self 😍</h3>
    <br>
    <div>
        <form action="{{ route('submit.register') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="" class="form-label">name</label>
                    <input type="text" name="name" placeholder="e.g jhon deo" class="form-control">
                </div>
                <div class="col-6 mb-3">
                    <label for="" class="form-label">email</label>
                    <input type="text" name="email" placeholder="examle@gmail.com" class="form-control">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-6 mb-3">
                    <label for="" class="form-label">password</label>
                    <input type="password" name="password"  class="form-control">
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-6 mb-3">
                    <label for="" class="form-label">confim password</label>
                    <input type="password" name="password_confirmation"  class="form-control">
                    @error('password_confirmation')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12 mb-3 d-flex justify-content-between flex-wrap gap-2">
                    <span>Already have an account? <a href="{{ route('login') }}">login</a></span>
                </div>
                <div class="col-12 mb-3">
                    <button type="submit" class="btn btn-dark">Register</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
