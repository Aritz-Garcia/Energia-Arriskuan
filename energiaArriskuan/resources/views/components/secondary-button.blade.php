<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-[#010440] border border-[#0BD904] rounded-md font-semibold text-xs text-[#0BD904] uppercase tracking-widest shadow-sm focus:outline-none  dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
