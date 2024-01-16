@props(['value'])

<label {{ $attributes->merge(['class' => 'text-lg mb-3 block text-base font-medium text-[#0BD904]']) }}>
    {{ $value ?? $slot }}
</label>
