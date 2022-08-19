@extends('layouts.app')

@section('content')


    @include('includes.publish-tweet-panel')

    <div class="border" style="border-radius: 15px">
        @foreach ($tweets as $tweet)
            @include('includes.tweet')
        @endforeach
    </div>
    {{ $tweets->links() }}

@endsection
