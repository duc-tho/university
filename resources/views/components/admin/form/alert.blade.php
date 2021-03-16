@props(['col'])

<div class="col-{{ $col }} p-3">
    <div {{ $attributes->merge(['class' => 'alert']) }} role="alert">
        {{ $slot }}
    </div>
</div>
