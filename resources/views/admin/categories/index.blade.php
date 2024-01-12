<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end p-2">
                <a href="{{ route('admin.categories.create') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Category</a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>                          
                            <th scope="col" class="px-6 py-3">
                                Edit
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(!$categories->isEmpty())
                            @foreach ($categories as $category)
                            <tr class="odd:bg-white even:bg-gray-50  border-b ">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{ $category->name }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    <img src="{{ Storage::url($category->image) }}" class="w-16 h-16 rounded">
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{ $category->description }}
                                </td>
                                <td
                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.categories.edit', $category->id) }}"
                                            class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Edit</a>
                                        <form                                            
                                            method="POST"
                                            action="{{ route('admin.categories.destroy', $category->id) }}"
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
                            <td colspan="4" class="py-4 px-6 text-sm text-center font-medium text-red-500 whitespace-nowrap">No Records</td>
                        @endif
                     
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
