<button {{ $attributes->merge(['type' => 'submit', 'class' => 'mt-4 text-center border-solid border-2 border-[#ff3131] rounded-lg p-2 text-[#010440] bg-[#ff3131] font-semibold w-auto sm:w-36']) }}>
    {{ $slot }}
</button>
