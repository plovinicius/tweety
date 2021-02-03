<article class="flex p-4 border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img src="{{ $tweet->user->avatar }}"
            alt=""
            class="rounded-full mr-2">
        </a>
    </div>

    <div>
        <h2 class="font-bold mb-4">
            <a href="{{ route('profile', $tweet->user) }}">
                {{ $tweet->user->name }}
            </a>
        </h2>

        <div class="text-sm">
            <p>{{ $tweet->body }}</p>
        </div>
    </div>
</article>
