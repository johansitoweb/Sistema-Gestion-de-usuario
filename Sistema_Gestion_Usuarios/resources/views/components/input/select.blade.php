@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} 
    {!! $attributes->merge(['class' => 'border-secondary-300 dark:border-secondary-700 
    dark:bg-secondary-900 dark:text-txtdark-300 focus:border-blue-500
    dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 
    rounded-md shadow-sm']) !!}>
    {{ $slot }}
</select>