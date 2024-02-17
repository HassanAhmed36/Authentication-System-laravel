@extends('layout.auth_master')
@section('main_section')
<div>
    <h3 class="fw-semibold">Reset Password 😍</h3>
    <br>
    <div>
        <form action="{{ route('submit.reset.password') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user_id }}">
            <div class="row">
                <div class="col-12 mb-4">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" name="password" placeholder="Enter your new password" class="form-control">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12 mb-4">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" placeholder="Confirm your new password" class="form-control">
                    @error('password_confirmation')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12 mb-3">
                    <button type="submit" class="btn btn-dark">Reset Password</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
