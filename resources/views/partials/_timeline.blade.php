<div class="border border-gray-300 rounded-lg">
    @foreach ($tweets as $tweet)
        @include('partials.cards._tweet')
    @endforeach
</div>
