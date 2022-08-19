<div class="border border-primary px-4 py-2 mb-5" style="border-radius: 20px">
    <form method="POST" action="{{ route('tweets.store') }}">
        @csrf
        <textarea name="body" id="" class="p-3" placeholder="Whats up doc?" style="width: 100%; height: 100px; border: none; background-color: transparent; resize: none;" rows="5"></textarea>
        <hr>

        <footer class="d-flex justify-content-between">
                <img class="rounded-circle" width="50px" height="50px" src="{{ auth()->user()->avatar }}" alt="your avatar">

                <button type="submit" class="btn btn-primary font-weight-bold" style="border-radius: 20px">Tweety</button>
        </footer>

    </form>
</div>

@error('body')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
