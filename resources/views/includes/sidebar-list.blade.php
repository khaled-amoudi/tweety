<ul class="navbar-nav p-4 shadow" style="background-color: #c1c0c044; border-radius: 20px; font-size: 18px;">
    <li class="nav-item">
        <a href="{{ route('tweets.index') }}" class="nav-link font-weight-bold text-dark">
            <i class="fa fa-home mx-1" aria-hidden="true"></i> Home
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('profile.show', auth()->user()) }}" class="nav-link font-weight-bold text-dark">
            <i class="fa fa-user mx-1" aria-hidden="true"></i> Profile
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('explore.index')}}" class="nav-link font-weight-bold text-dark">
            <i class="fa fa-globe mx-1" aria-hidden="true"></i> Explore
        </a>
    </li>

    <li class="nav-item">

        <form action="/logout" method="POST">
            @csrf

            <button class="btn btn-outline-primary font-weight-bold mt-2" style="border-radius: 25px">
                <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
            </button>

        </form>


    </li>
</ul>
