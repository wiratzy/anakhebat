<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'actions' => null,
    'footer' => null,
    'header' => null,
    'heading' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'actions' => null,
    'footer' => null,
    'header' => null,
    'heading' => null,
]); ?>
<?php foreach (array_filter(([
    'actions' => null,
    'footer' => null,
    'header' => null,
    'heading' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div
    <?php echo e($attributes->class([
            'space-y-2 rounded-xl bg-white p-2 shadow',
            'dark:border-gray-600 dark:bg-gray-800' => config('filament.dark_mode'),
        ])); ?>

>
    <?php if($actions || $header || $heading): ?>
        <div class="px-4 py-2">
            <?php if($header): ?>
                <?php echo e($header); ?>

            <?php elseif($actions || $heading): ?>
                <div
                    class="flex flex-col gap-4 xl:flex-row xl:items-center xl:justify-between"
                >
                    <?php if (isset($component)) { $__componentOriginal2d57e9a4f94e1d74974fd1cc8bf41e90 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2d57e9a4f94e1d74974fd1cc8bf41e90 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.card.heading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::card.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php echo e($heading); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2d57e9a4f94e1d74974fd1cc8bf41e90)): ?>
<?php $attributes = $__attributesOriginal2d57e9a4f94e1d74974fd1cc8bf41e90; ?>
<?php unset($__attributesOriginal2d57e9a4f94e1d74974fd1cc8bf41e90); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2d57e9a4f94e1d74974fd1cc8bf41e90)): ?>
<?php $component = $__componentOriginal2d57e9a4f94e1d74974fd1cc8bf41e90; ?>
<?php unset($__componentOriginal2d57e9a4f94e1d74974fd1cc8bf41e90); ?>
<?php endif; ?>

                    <?php if($actions): ?>
                        <div
                            class="flex items-center space-x-2 rtl:space-x-reverse"
                        >
                            <?php echo e($actions); ?>

                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if(($actions || $header || $heading) && $slot->isNotEmpty()): ?>
        <?php if (isset($component)) { $__componentOriginal3bb406532a5c335331f97685b7527de1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3bb406532a5c335331f97685b7527de1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.hr','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::hr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3bb406532a5c335331f97685b7527de1)): ?>
<?php $attributes = $__attributesOriginal3bb406532a5c335331f97685b7527de1; ?>
<?php unset($__attributesOriginal3bb406532a5c335331f97685b7527de1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bb406532a5c335331f97685b7527de1)): ?>
<?php $component = $__componentOriginal3bb406532a5c335331f97685b7527de1; ?>
<?php unset($__componentOriginal3bb406532a5c335331f97685b7527de1); ?>
<?php endif; ?>
    <?php endif; ?>

    <div class="space-y-2">
        <?php if($slot->isNotEmpty()): ?>
            <div class="space-y-4 px-4 py-2">
                <?php echo e($slot); ?>

            </div>
        <?php endif; ?>
    </div>

    <?php if($footer && $slot->isNotEmpty()): ?>
        <?php if (isset($component)) { $__componentOriginal3bb406532a5c335331f97685b7527de1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3bb406532a5c335331f97685b7527de1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.hr','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::hr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3bb406532a5c335331f97685b7527de1)): ?>
<?php $attributes = $__attributesOriginal3bb406532a5c335331f97685b7527de1; ?>
<?php unset($__attributesOriginal3bb406532a5c335331f97685b7527de1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bb406532a5c335331f97685b7527de1)): ?>
<?php $component = $__componentOriginal3bb406532a5c335331f97685b7527de1; ?>
<?php unset($__componentOriginal3bb406532a5c335331f97685b7527de1); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if($footer): ?>
        <div class="px-4 py-2">
            <?php echo e($footer); ?>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\wiran\Documents\SEMESTER 4\anakhebat\vendor\filament\filament\src\/../resources/views/components/card/index.blade.php ENDPATH**/ ?>