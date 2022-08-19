@extends('layouts.app')

@section('content')


    @include('includes.profile-header')

    <div class="border" style="border-radius: 15px">
        @forelse ($tweets as $tweet)
            @include('includes.tweet')
        @empty
            <p class="font-weight-bold px-4 pt-3">No Tweets Yet 😐</p>
        @endforelse
    </div>
    <div class="mt-4 d-flex justify-content-center">
        {{ $tweets->links() }}
    </div>


@endsection
