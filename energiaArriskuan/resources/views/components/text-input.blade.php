@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full rounded-md border border-kolore-nagusia atzekaldeko-kolore-oinarria py-3 px-6 text-base font-medium text-white outline-none focus:border-white focus:shadow-md']) !!}>
