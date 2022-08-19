@extends('layouts.app')

@section('content')

    @foreach ($users as $user)

        @if (auth()->user()->id != $user->id)
            <div class="d-flex justify-content-between my-3 border rounded shadow-sm">
                <a href="{{ route('profile.show', $user->username) }}" class="nav-link text-dark">
                    <div class="d-flex align-items-center">
                        <img src="{{ $user->avatar }}" class="rounded" width="60px" height="60px" alt="{{ $user->username }}">
                        <div class="d-flex flex-column mx-4 mt-2">
                            <p class="font-weight-bold" style="font-size: 18px">{{ $user->name }}</p>
                            <small class="mb-2" style="margin-top: -10px">{{ '@' . $user->username }}</small>
                        </div>
                    </div>
                </a>
                <div class="d-flex align-items-center mx-4">
                    @include('includes.follow-btn')
                </div>
            </div>
        @endif

    @endforeach

    {{ $users->links() }}


@endsection
