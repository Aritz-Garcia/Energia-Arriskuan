@props(['value'])

<label {{ $attributes->merge(['class' => 'text-lg mb-3 block text-base font-medium testu-kolore-nagusia']) }}>
    {{ $value ?? $slot }}
</label>
