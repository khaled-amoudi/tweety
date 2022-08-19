<div class="p-4 shadow" style="background-color: #c1c0c044; border-radius: 20px;">
    <h3 class="mb-4 font-weight-bold">Following<hr></h3>


    <ul class="navbar-nav" style="font-size: 18px">

        @forelse (auth()->user()->follows as $user)
            <li class="nav-item d-flex align-items-center mb-3">
                <div class="mx-2 rounded-circle">
                    {{-- <img class="rounded-circle" src="{{ $user->avatar }}" alt=""> --}}
                    <a href="{{ route('profile.show', $user) }}">
                        <img class="rounded-circle" width="40px" height="40px" src="{{ $user->avatar }}" alt="">
                    </a>
                </div>
                <a href="{{ route('profile.show', $user) }}" class="nav-link text-dark">
                    <small class="font-weight-bolder">{{ $user->name }}</small>
                </a>
            </li>
        @empty
            <p class="font-weight-bold px-4 pt-3">No Friends Yet 😐</p>
        @endforelse

    </ul>

</div>
