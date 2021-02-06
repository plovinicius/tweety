<form method="POST" action="/tweets/{{ $tweet->id }}">
    @csrf
    @method('DELETE')

    <button class="flex items-center" style="{{ $tweet->isDislikedBy(auth()->user()) ? 'color: #3f83f8; fill:#3f83f8;' : 'color: #6b7280; fill: #6b7280;' }}">
        <span class="svg-icon mr-2" style="width: 15px">
            <svg viewBox="0 0 20 20">
            <g stroke="none" stroke-width="1" fill-rule="evenodd">
                <g id="icon-shape">
                    <path d="M11.0010436,20 C9.89589787,20 9.00000024,19.1132936 9.0000002,18.0018986 L9,12 L1.9973917,12 C0.894262725,12 0,11.1122704 0,10 L0,8 L2.29663334,1.87564456 C2.68509206,0.839754676 3.90195042,8.52651283e-14 5.00853025,8.52651283e-14 L12.9914698,8.52651283e-14 C14.1007504,8.52651283e-14 15,0.88743329 15,1.99961498 L15,10 L12,17 L12,20 L11.0010436,20 L11.0010436,20 Z M17,10 L20,10 L20,0 L17,0 L17,10 L17,10 Z" id="Fill-97"></path>
                </g>
            </g>
            </svg>
        </span>

        <span class="text-sm" style="padding-top: 4px;">{{ $tweet->dislikes ?: 0 }}</span>
    </button>
</form>
