<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center mr-4 border-2 border-kolore-nagusia boton hover:border-[#ffffff] hover:text-[#ffffff] p-2 rounded-lg']) }}>
    {{ $slot }}
</button>
