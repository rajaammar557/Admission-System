@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'w-full px-5 py-2 text-gray-700 bg-gray-200 rounded border-0']) }}>
