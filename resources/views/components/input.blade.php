@props(['disabled' => false])
<div class="col-span-6 sm:col-span-3">
    <input {!! $attributes->merge([
        'class' =>
            'mt-1 px-2 py-3 block w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm',
    ]) !!}>
</div>


{{-- <input {!! $attributes->merge([
    'class' =>
        'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50',
]) !!}> --}}
