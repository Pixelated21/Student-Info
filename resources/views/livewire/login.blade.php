<section class="flex flex-col md:flex-row h-screen items-center">

    <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
        <img src="https://source.unsplash.com/random" alt="" class="w-full h-full object-cover">
    </div>

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

        <div class="w-full h-100">


            <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Log in to your account</h1>

            <form wire:submit.prevent="login" class="mt-6">
                <div>
                    <label class="block text-gray-700">Email Address
                        @error('email')<span class=" text-xs text-red-600">{{$message}}</span>@enderror
                    </label>

                    <input wire:model.lazy="email" type="email" name="email" id="email"
                           placeholder="Enter Email Address"
                           class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                           autofocus autocomplete required>
                </div>

                <div class="mt-4">
                    <label class="block text-gray-700">Password
                        @error('password')<span class=" text-xs text-red-600">{{$message}}</span>@enderror
                    </label>
                    <input wire:model.lazy="password" type="password" name="password" id="password"
                           placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
                </div>


                <button class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-6">Log In
                </button>
            </form>

            <hr class="my-6 border-gray-300  w-full">
            <div class="flex justify-center">
                <a class="text-center w-full" href="{{url('/register')}}">Dont Have An Account?</a>
            </div>


        </div>
    </div>

</section>
