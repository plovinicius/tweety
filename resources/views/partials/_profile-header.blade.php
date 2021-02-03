<header class="mb-6 relative">
    <img class="rounded-lg mb-2 border border-gray-100"
        style="width: 100%; height: 300px;"
        src="https://picsum.photos/700/300" alt="">

    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="font-bold text-2xl mb-0">{{ $user->name }}</h1>
            <p class="text-sm">Joined {{ $user->created_at->diffForHUmans() }}</p>
        </div>

        <div>
            <a href=""
                class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">
                Edit Profile
            </a>

            <a href=""
                class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
                Follow Me
            </a>
        </div>

        <img src="{{ $user->big_avatar }}" alt=""
            class="absolute rounded-full left-0 right-0 mx-auto"
            style="width: 150px; top: 220px">
    </div>

    <p class="text-sm">
        The name's Bugs. Bugs Bunny. Don't weat it out. Bugs is an anthropomorphic gray
        and white rabbit or hare who is famous for this flippant, insouciant personality.
        He is also characterized by a Brooklyn accent, his portrayal as a trickster,
        and his catch phrase "Eh ... What's up, doc?
    </p>
</header>
