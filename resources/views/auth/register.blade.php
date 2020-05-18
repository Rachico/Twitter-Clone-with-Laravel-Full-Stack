<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-300  border border-gray-300 rounded-lg mb-16 shadow-md" style="width: 400px" >
            <div class="col-md-8">

                    <div class="card-header font-bold text-lg mb-4">{{ __('Register') }}</div>


                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-6">
                                <label for="username"
                                       class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                >username</label>

                                <input type="username" name="username" id="username"
                                       required
                                       class="border border-gray-400 p-2 w-full rounded"
                                       value="{{ old('username') }}"

                                >

                                @error('username')
                                <p class="text-red-500 text-xs mt-2">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="name"
                                       class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                >name</label>

                                <input type="name" name="name" id="name"
                                       required
                                       class="border border-gray-400 p-2 w-full rounded"
                                       value="{{ old('name') }}"
                                       autocomplete="name"
                                >

                                @error('name')
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
                                       value="{{ old('email') }}"
                                       autocomplete="email"
                                >

                                @error('email')
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
                                       autocomplete="current-password"

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
                                >password confirmation</label>

                                <input type="password" name="password_confirmation" id="password_confirmation"
                                       required
                                       class="border border-gray-400 p-2 w-full rounded"
                                       autocomplete="current-password"

                                >

                                @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-2">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>





                            <div>
                                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">
                                    Register
                                </button>


                                    <span class="text-xs text-gray-700" >
                                        Already have an account?
                                    </span>
                                    <a href="/login" class="text-xs text-gray-700">
                                        login
                                    </a>
                            </div>
                        </form>


            </div>
        </div>
    </div>
</x-master>
