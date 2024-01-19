@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-lg font-bold text-red-600 dark:text-red space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
