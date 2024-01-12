<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 focus:outline-none transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
