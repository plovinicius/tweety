<h2 class="font-bold text-xl mb-4">Friends</h2>

<ul>
    @forelse (auth()->user()->follows as $user)
        <li class="mb-4">
            <div>
                <a class="flex items-center text-sm" href="{{ route('profile', $user) }}">
                    <img src="{{ $user->avatar }}"
                        alt="" width="40" height="40"
                        class="rounded-full mr-2">

                    {{ $user->name }}
                </a>
            </div>
        </li>
    @empty
        <li>No friends yet!</li>
    @endforelse
</ul>
