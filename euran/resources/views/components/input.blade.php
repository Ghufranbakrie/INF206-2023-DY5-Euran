@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-black border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-2x shadow-sm']) !!}>