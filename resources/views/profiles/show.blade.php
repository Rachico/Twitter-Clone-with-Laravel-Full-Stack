<x-app>
    <header class="mb-6 relative">
       <div class="relative">
           <img src="/img/cat.jpg"
                class="img-thumbnail"
                style="width: 700px; height: 223px; border-radius: 20px;"
           >
           <img
               src="{{$user->getAvatar() }}"
               class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
               width="150"
               style="left: 50%"
           >
       </div>



        <div class="flex justify-between items-center mb-6 mt-2">
            <div style="max-width: 270px" >
                <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class="text-sm"> Joined {{ $user->created_at->diffForHumans() }}</p>

            </div>


            <div class="flex">
                @can('edit',$user)
                <a href="{{ $user->path('edit') }}" class="rounded-full border border-gray-500 py-2 px-4 text-black text-xs mr-2">
                    Edit Profile
                </a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>

            </div>
        </div>
        <p class="text-sm">
            🎵 Music Addict, 🌲 Nature Lover, 📚 Avid Reader, 🕴️ Entrepreneur in the making.
        </p>




    </header>


    @include('timeline', [
        'tweets' => $tweets
    ])
</x-app>
