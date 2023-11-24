@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-black
     dark:border-white dark:bg-gray-700  dark:text-white focus:border-yellow dark:focus:border-yellow focus:ring-yellow dark:focus:ring-yellow rounded-md shadow-sm']) !!}>
