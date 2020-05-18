@unless(current_user()->is($user))
    <form method="POST" action="/profiles/{{ $user->username }}/follow">
        @csrf
        <button type="submit" class="bg-blue-500 rounded-full py-2 px-4 text-white text-xs mr-2">
            {{ auth()->user()->following($user) ? 'Unfollow' : 'Follow' }}
        </button>
    </form>
    @endunless
