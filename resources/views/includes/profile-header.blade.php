

<div class="mb-5">

    <header class="bg-transparent" style="overflow: hidden;">
        <img class="w-100" src="/images/header.jpg" alt="header" style="border-radius: 25px; height: 175px">
        <div class="d-flex justify-content-center">
            <img class="avatar-img" src="{{ $user->avatar }}" alt="avatar">
        </div>
        <div class="p-4 d-flex justify-content-between align-items-center">

            <div class="p-2" style="max-width: 250px;">
                <h5 class="font-weight-bold text-break">{{ $user->name }}</h5>
                <small class="mt-1 text-muted">Joined {{ $user->created_at->diffForHumans() }}</small>
            </div>

            <div class="d-flex">

                {{-- @if (auth()->user()->isNot($user))
                    @include('includes.follow-btn')
                @else
                    @include('includes.edit-btn')
                @endif --}}

                @can('edit', $user)
                    @include('includes.edit-btn')
                @else
                    @include('includes.follow-btn')
                @endcan


            </div>
        </div>
        <div class="px-3">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta ea eum nostrum. Obcaecati, accusantium! Laboriosam assumenda dolores mollitia ipsum omnis, soluta porro sit quos voluptatem a molestiae vero et quia.
        </div>
    </header>

</div>
