<link rel="stylesheet" href="{{mix('css/app.css')}}">
@livewireStyles
<div class="h-screen ">


    <main class="flex w-full h-screen">
        <aside class="w-80 h-screen bg-gray shadow-md w-fulll hidden sm:block">
            <div class="flex flex-col justify-between h-screen p-4 bg-gray-800">
                <div class="text-sm">
                    <div class="bg-gray-900 text-2xl font-extrabold text-white p-5 rounded cursor-pointer">Live Students</div>
                    <div class="bg-gray-700 text-blue-300 p-2 rounded mt-2 cursor-pointer">Students</div>

                </div>


            </div>
        </aside>

        <section class="w-full p-4">
            <div class="mb-10 text-3xl font-extrabold">Dropdown</div>
            <div class="w-full h-5/6 border-dashed border-4 p-4 text-md">
                <div class="h-5/6">
                    @yield('content')
                </div>
            </div>
        </section>

    </main>
</div>
@livewireScripts
