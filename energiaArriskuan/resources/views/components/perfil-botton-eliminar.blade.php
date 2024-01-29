<button {{ $attributes->merge(['type' => 'submit', 'class' => 'mt-4 text-center border-solid border-2 border-[#ff3131] rounded-full p-2 text-[#010440] bg-[#ff3131] hover:bg-[#fff] hover:border-[#fff] font-semibold w-auto sm:w-36']) }}>
    {{ $slot }}
</button>
