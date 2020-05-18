<x-app>
    <h1 class="mb-6 font-bold text-4xl">Edit Profile</h1>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data" >
        @csrf
        @method('PATCH')
        <div class="mb-6">
            <label for="name"
                   class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >Name</label>


                <input type="text" name="name" id="name"
                       required
                       class="border border-gray-400 p-2 w-full rounded"
                       value="{{ $user->name }}"
                >



            @error('name')
                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username"
                   class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >Username</label>

            <input type="text" name="username" id="username"
                   required
                   class="border border-gray-400 p-2 w-full rounded"
                   value="{{ $user->username }}"
            >

            @error('username')
            <p class="text-red-500 text-xs mt-2">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email"
                   class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >Email</label>

            <input type="email" name="email" id="email"
                   required
                   class="border border-gray-400 p-2 w-full rounded"
                   value="{{ $user->email }}"
            >

            @error('email')
            <p class="text-red-500 text-xs mt-2">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="avatar"
                   class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >Avatar</label>

            <div class="flex">
                <img src="/storage/{{ $user->avatar }}"
                     alt="your avatar"
                     width="50"
                     class="mr-2"
                >

                <input type="file"
                       name="avatar"
                       id="avatar"
                       class="border border-gray-400 p-2 w-full rounded"
                >


            </div>


            @error('avatar')
            <p class="text-red-500 text-xs mt-2">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password"
                   class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >password</label>

            <input type="password" name="password" id="password"
                   required
                   class="border border-gray-400 p-2 w-full rounded"

            >

            @error('password')
            <p class="text-red-500 text-xs mt-2">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation"
                   class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >password_confirmation</label>

            <input type="password" name="password_confirmation" id="password_confirmation"
                   required
                   class="border border-gray-400 p-2 w-full rounded"

            >

            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600 mr-4">
                Submit
            </button>

            <a href="{{ $user->path() }}" class="font-bold border border-blue-400 py-2 px-4 rounded hover:bg-blue-400"> Cancel</a>
        </div>


    </form>
</x-app>
