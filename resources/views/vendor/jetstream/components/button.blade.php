<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-9 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }} style="border-radius: 0px;background-color: #39a0ff;color: white">
    {{ $slot }}
</button>
