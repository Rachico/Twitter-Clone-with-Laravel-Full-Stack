<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-300 rounded-lg border border-gray-300 shadow-md mb-16" style="width: 400px">
            <div class="col-md-8">

                    <div class="card-header font-bold text-lg mb-4">{{ __('Login') }}</div>


                        <form method="POST" action="{{ route('login') }}">
                            @csrf

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
                                <div>
                                    <input
                                        class="mr-1"
                                        type="checkbox"
                                        name="remember"
                                        id="remember"
                                        {{ old('remember') ? 'checked' : '' }}
                                        >

                                    <label for="remember" class="text-xs font-bold uppercase text-gray-700">
                                        Remember me
                                    </label>
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2 mb-8">
                                    Submit
                                </button>

                                <a href="{{ route('password.request') }}" class="text-xs text-gray-700">
                                    Forgot your password?
                                </a>
                                <br>

                            </div>


                        </form>

                <span class="text-xs text-gray-700 ml-16">
                                        Don't have an account?
                                    </span>
                <a href="/register" class="text-xs text-gray-700">
                    sign up
                </a>


            </div>
        </div>
    </div>
</x-master>
