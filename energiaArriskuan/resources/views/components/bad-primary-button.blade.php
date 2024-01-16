<button {{ $attributes->merge(['type' => 'submit', 'class' => 'hover:bg-white rounded-full bg-red-800 py-3 px-8 text-base font-semibold text-[#FFFF] hover:text-[#010440] outline-none']) }}>
    {{ $slot }}
</button>
