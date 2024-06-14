<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'form',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'form',
]); ?>
<?php foreach (array_filter(([
    'form',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div
    <?php echo e($attributes->class(['filament-tables-filters-form space-y-6'])); ?>

    x-data
>
    <?php echo e($form); ?>


    <div class="text-end">
        <?php if (isset($component)) { $__componentOriginal8088337a56406b46fecf9bd6589edc2f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8088337a56406b46fecf9bd6589edc2f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'tables::components.link','data' => ['wire:click' => 'resetTableFiltersForm','color' => 'danger','tag' => 'button','size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tables::link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'resetTableFiltersForm','color' => 'danger','tag' => 'button','size' => 'sm']); ?>
            <?php echo e(__('tables::table.filters.buttons.reset.label')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8088337a56406b46fecf9bd6589edc2f)): ?>
<?php $attributes = $__attributesOriginal8088337a56406b46fecf9bd6589edc2f; ?>
<?php unset($__attributesOriginal8088337a56406b46fecf9bd6589edc2f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8088337a56406b46fecf9bd6589edc2f)): ?>
<?php $component = $__componentOriginal8088337a56406b46fecf9bd6589edc2f; ?>
<?php unset($__componentOriginal8088337a56406b46fecf9bd6589edc2f); ?>
<?php endif; ?>
    </div>
</div>
<?php /**PATH C:\Users\wiran\Documents\SEMESTER 4\anakhebat\vendor\filament\tables\src\/../resources/views/components/filters/index.blade.php ENDPATH**/ ?>