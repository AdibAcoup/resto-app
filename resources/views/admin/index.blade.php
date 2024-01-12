<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm">
               <div class="grid gap-10 sm:gap-20 grid-cols-1 sm:grid-cols-2">
                    <div class="dark:bg-gray-800 text-center rounded-xl p-5">
                        <img src="{{url('/user.png')}}" class="mx-auto" width="100" height="100" alt="Image"/>
                        <p class="text-lg text-white text-center mt-3">USERS</p>
                        <div class="mt-10 text-5xl text-indigo-500 text-center">
                            {{count($users)}}
                        </div>
                    </div>
                    <div class="dark:bg-gray-800 text-center rounded-xl p-5">
                        <img src="{{url('/cat.png')}}" class="mx-auto" width="100" height="100" alt="Image"/>
                        <p class="text-lg text-white text-center mt-3">Categories</p>
                        <div class="mt-10 text-5xl text-indigo-500 text-center">
                            {{count($categories)}}
                        </div>
                    </div>
               </div>

               <div class="grid mt-10 sm:mt-10 gap-10 sm:gap-20 grid-cols-1 sm:grid-cols-2">
                    <div class="dark:bg-gray-800 text-center rounded-xl p-5">
                        <img src="{{url('/menu.png')}}" class="mx-auto" width="100" height="100" alt="Image"/>
                        <p class="text-lg text-white text-center mt-3">Menus</p>
                        <div class="mt-10 text-5xl text-indigo-500 text-center">
                            {{count($menus)}}
                        </div>
                    </div>
                    <div class="dark:bg-gray-800 text-center rounded-xl p-5">
                        <img src="{{url('/reserved.png')}}" class="mx-auto" width="100" height="100" alt="Image"/>
                        <p class="text-lg text-white text-center mt-3">Reservations</p>
                        <div class="mt-10 text-5xl text-indigo-500 text-center">
                            {{count($reservations)}}
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</x-admin-layout>
