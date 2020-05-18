<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8 shadow-md">
    <form method="POST" action="/tweets">
        @csrf
                    <textarea
                        name="body"
                        class="w-full"
                        placeholder="Write something..."
                        required


                    ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img
                src="{{auth()->user()->getAvatar() }}"
                class="rounded-full mr-2"
                width="50px"
                height="50px"
            >

            <button
                type="submit"
                class="bg-blue-500 rounded-full shadow py-2 hover:bg-blue-600 px-10  text-white h-10"
            >Publish</button>

        </footer>
        @error('body')
            <p class="text-red-400 text-sm mt-3">{{ $message }}</p>
        @enderror


    </form>

</div>
