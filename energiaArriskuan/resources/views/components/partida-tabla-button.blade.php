<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center mr-4 border-2 border-[#0bd904] boton hover:border-[#ffffff] hover:text-[#ffffff] p-2 rounded-lg']) }}>
    {{ $slot }}
</button>
