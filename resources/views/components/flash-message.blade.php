@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="fixed top-0 px-48 py-3 text-black transform -translate-x-1/2 bg-gray-200 left-1/2">
        <p>{{ session('message') }}</p>
    </div>
@endif
