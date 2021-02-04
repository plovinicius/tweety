<article class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img src="{{ $tweet->user->avatar }}"
            alt="" width="40" height="40"
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
