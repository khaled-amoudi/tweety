<div class="p-4">
    <div class="d-flex {{ $loop->last ? '' : 'border-bottom' }}">

        <a href="{{ route('profile.show', $tweet->user) }}">
            <div class="me-4">
                <img class="rounded-circle" width="40px" height="40px" src="{{ $tweet->user->avatar }}" alt="">
            </div>
        </a>

        <div>
            <h4 class="font-weight-bold">
                <a class="nav-link text-dark" href="{{ route('profile.show', $tweet->user) }}">
                    {{ $tweet->user->name }}
                </a>
            </h4>
            <p class="text-secondary" style="font-size: 17px">
                {{ $tweet->body }}
            </p>
        </div>
    </div>
</div>
