<button {{ $attributes->merge(['type' => 'submit', 'class' => 'hover:bg-white rounded-full bg-[#0BD904] py-3 px-8 text-base font-semibold text-[#010440] outline-none']) }}>
    {{ $slot }}
</button>
