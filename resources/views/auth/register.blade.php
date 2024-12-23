@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Register</h3>
                <form method="POST" action="{{ route('register') }}" action="#" class="p-5 bg-light">
                    @csrf
                <div class="form-group">
                        <label for="email">Username *</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="website">Password *</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                </div>

                <div class="form-group">
                    <label for="website">Password Confirm*</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">


                </div>


                <div class="form-group">
                    <button type="submit"  class="btn btn-primary">Register</button>
                </div>

                </form>
            </div>


            
        </div>
    </div>
</div>
@endsection
