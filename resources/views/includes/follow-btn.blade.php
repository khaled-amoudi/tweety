<form action="{{ route('follow', $user->username) }}" method="POST" class="mx-2">
    @csrf

    <button type="submit" class="btn btn-primary font-weight-bold" style="border-radius: 25px">
        {{ auth()->user()->following($user) ? 'Unfollow' : 'Follow Me' }}
    </button>

</form>
