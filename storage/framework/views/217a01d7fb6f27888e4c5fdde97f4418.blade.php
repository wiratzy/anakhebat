<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['darkMode','class'])
<x-tables::hr :dark-mode="$darkMode" :class="$class" >

{{ $slot ?? "" }}
</x-tables::hr>