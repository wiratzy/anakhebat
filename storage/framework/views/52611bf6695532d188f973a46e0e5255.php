<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'indicatorsCount' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'indicatorsCount' => null,
]); ?>
<?php foreach (array_filter(([
    'indicatorsCount' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginalefe22f8cc3ec165cd36d597b30b8510b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalefe22f8cc3ec165cd36d597b30b8510b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'tables::components.icon-button','data' => ['icon' => 'heroicon-o-filter','label' => __('tables::table.buttons.filter.label'),'indicator' => $indicatorsCount,'attributes' => $attributes->class(['filament-tables-filters-trigger'])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tables::icon-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'heroicon-o-filter','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('tables::table.buttons.filter.label')),'indicator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($indicatorsCount),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->class(['filament-tables-filters-trigger']))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalefe22f8cc3ec165cd36d597b30b8510b)): ?>
<?php $attributes = $__attributesOriginalefe22f8cc3ec165cd36d597b30b8510b; ?>
<?php unset($__attributesOriginalefe22f8cc3ec165cd36d597b30b8510b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalefe22f8cc3ec165cd36d597b30b8510b)): ?>
<?php $component = $__componentOriginalefe22f8cc3ec165cd36d597b30b8510b; ?>
<?php unset($__componentOriginalefe22f8cc3ec165cd36d597b30b8510b); ?>
<?php endif; ?>
<?php /**PATH C:\Users\wiran\Documents\SEMESTER 4\anakhebat\vendor\filament\tables\src\/../resources/views/components/filters/trigger.blade.php ENDPATH**/ ?>