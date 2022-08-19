{{-- <form action="{{ route('profile.edit', $user->username) }}" method="GET" class="mx-2">
    @csrf

    <button type="submit" class="btn btn-outline-primary font-weight-bold" style="border-radius: 25px">Edit Profile</button>

</form> --}}
<a class="btn btn-outline-primary font-weight-bold" style="border-radius: 25px" href="{{ route('profile.edit', $user->username) }}">Edit Profile</a>
