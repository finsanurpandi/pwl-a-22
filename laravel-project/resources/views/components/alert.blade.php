@php
    $bg = '';

    if($type == 'info') {
        $bg = 'mt-2 bg-blue-600 text-sm text-white rounded-lg p-4 dark:bg-blue-500';
    } elseif($type == 'danger') {
        $bg = 'mt-2 bg-red-600 text-sm text-white rounded-lg p-4 dark:bg-blue-500';
    } elseif ($type == 'success') {
        $bg = 'mt-2 bg-teal-600 text-sm text-white rounded-lg p-4 dark:bg-blue-500';
    }

@endphp

<div class="{{ $bg }}" role="alert" tabindex="-1" aria-labelledby="hs-solid-color-info-label">
    <span id="hs-solid-color-info-label" class="font-bold">{{ $title }}</span> 
    {{ $slot }}
</div>