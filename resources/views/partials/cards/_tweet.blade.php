<article class="flex p-4 border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
        <img src="{{ $tweet->user->avatar }}"
            alt=""
            class="rounded-full mr-2">
    </div>

    <div>
        <h2 class="font-bold mb-4">
            {{ $tweet->user->name }}
        </h2>

        <div class="text-sm">
            <p>{{ $tweet->body }}</p>
        </div>
    </div>
</article>
