@php
    $class = ['brand', 'success', 'danger', 'info', 'warning'];
@endphp

<div class="kt-widget1">
    <div class="kt-widget1__item">
        <div class="kt-widget1__info">
            <h3 class="kt-widget1__title">{{ $wage->name }} {{ $loop->index }}</h3>
            <span class="kt-widget1__desc">{{ $wage->comment }}</span>
        </div>
        <span class="kt-widget1__number kt-font-{{ $class[array_rand($class)] }}">₱{{ $wage->wage }}</span>
    </div>
</div>
