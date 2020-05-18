<div class="flex p-4 border border-gray-400 rounded-lg mb-2 shadow-md">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile',$tweet->user) }}">
            <img
                src="{{$tweet->user->getAvatar() }}"
                class="rounded-full mr-2"
                width="50px"
                height="50px"
            >
        </a>

    </div>

    <div>
        <a href="{{ route('profile',$tweet->user) }}" class="flex items-center">
            <h5 class="font-bold mb-1 mr-2">{{ $tweet->user->name }}</h5>
            <span class="text-xs text-blue-500 font-bold">{{ $tweet->created_at->diffForHumans() }}</span>
        </a>


        <p class="text-sm">
            {{ $tweet->body }}
        </p>

        <x-like-buttons :tweet="$tweet"></x-like-buttons>
    </div>

</div>
