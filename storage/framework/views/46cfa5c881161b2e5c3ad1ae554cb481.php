<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['darkMode','class']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['darkMode','class']); ?>
<?php foreach (array_filter((['darkMode','class']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal1c6b9867004d1a406262ace2c95ab783 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1c6b9867004d1a406262ace2c95ab783 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'tables::components.hr','data' => ['darkMode' => $darkMode,'class' => $class]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tables::hr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['dark-mode' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($darkMode),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($class)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1c6b9867004d1a406262ace2c95ab783)): ?>
<?php $attributes = $__attributesOriginal1c6b9867004d1a406262ace2c95ab783; ?>
<?php unset($__attributesOriginal1c6b9867004d1a406262ace2c95ab783); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c6b9867004d1a406262ace2c95ab783)): ?>
<?php $component = $__componentOriginal1c6b9867004d1a406262ace2c95ab783; ?>
<?php unset($__componentOriginal1c6b9867004d1a406262ace2c95ab783); ?>
<?php endif; ?><?php /**PATH C:\Users\wiran\Documents\SEMESTER 4\anakhebat\storage\framework\views/217a01d7fb6f27888e4c5fdde97f4418.blade.php ENDPATH**/ ?>