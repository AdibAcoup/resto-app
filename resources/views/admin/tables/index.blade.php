<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-end p-2">
                <a href="{{ route('admin.tables.create') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New table</a>
            </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Guest
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Location
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Edit
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(!$tables->isEmpty())
                            @foreach ($tables as $table)
                            <tr class="odd:bg-white even:bg-gray-50  border-b ">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{ $table->name }}
                                </td>                                
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{ $table->guest_number }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{ $table->status }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{ $table->location }}
                                </td>
                                <td
                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.tables.edit', $table->id) }}"
                                            class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Edit</a>
                                        <form                                            
                                            method="POST"
                                            action="{{ route('admin.tables.destroy', $table->id) }}"
                                            onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <td colspan="5" class="py-4 px-6 text-sm text-center font-medium text-red-500 whitespace-nowrap">No Records</td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
