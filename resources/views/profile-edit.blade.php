@extends('layouts.app')

@section('content')


    <div class="w-100 border p-4 shadow" style="border-radius: 25px">
        <form action="{{ route('profile.update', $user->username) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')


            <div class="form-group">
                <label for="username" class="col-form-label text-md-right font-weight-bold">Username</label>
                <div class="">
                    <input id="username" type="text" value="{{ $user->username }}" class="form-control" name="username" required>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group">
                <label for="name" class="col-form-label text-md-right font-weight-bold">Name</label>
                <div class="">
                    <input id="name" type="text" value="{{ $user->name }}" class="form-control" name="name" required>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group">
                <div>
                    <label for="avatar" class="col-form-label text-md-right font-weight-bold">Avatar</label>
                <div class="d-flex">
                    <input id="avatar" type="file" value="{{ $user->avatar }}" class="form-control form-control-lg" name="avatar">
                    <img src="{{ $user->avatar }}" width="60px" height="45px" alt="">
                </div>
                @error('avatar')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

            </div>


            <div class="form-group">
                <label for="email" class="col-form-label text-md-right font-weight-bold">Email</label>
                <div class="">
                    <input id="email" type="email" value="{{ $user->email }}" class="form-control" name="email" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group">
                <label for="password" class="col-form-label text-md-right font-weight-bold">Password</label>
                <div class="">
                    <input id="password" type="password" class="form-control" name="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group">
                <label for="password_confirmation" class="col-form-label text-md-right font-weight-bold">Confirm Password</label>
                <div class="">
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group d-flex justify-content-center">
                <button class="btn btn-primary btn-lg font-weight-bold" style="border-radius: 25px" type="submit">Submit</button>
                <a class="nav-link font-weight-bold mt-2" href="{{ route('profile.show', $user->username) }}">Cancel</a>
            </div>

        </form>
    </div>


@endsection
