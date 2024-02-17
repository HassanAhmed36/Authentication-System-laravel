@extends('layout.auth_master')
@section('main_section')
<div>
    <h3 class="fw-semibold">Forget password 😍</h3>
    <br>
    <div>
        <form action="{{route('submit.forget.password')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12 mb-4">
                    <label for="" class="form-label">email</label>
                    <input type="text" name="email" placeholder="examle@gmail.com" class="form-control">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12 mb-3">
                    <button type="submit" class="btn btn-dark">forget password</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
