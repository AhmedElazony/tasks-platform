@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'mt-2 font-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
@endif
