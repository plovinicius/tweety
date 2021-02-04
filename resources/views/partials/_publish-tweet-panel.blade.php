<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf

        <textarea name="body"
            class="w-full" placeholder="What`s up doc?"></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img src="{{ auth()->user()->avatar }}"
                alt="Avatar"
                class="rounded-full mr-2">

            <button type="submit"
                class="bg-blue-500 rounded-full shadow py-2 px-6 text-white">
                Publish
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-4 bg-red-200 p-2 rounded-md">{{ $message }}</p>
    @enderror
</div>
