<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal8fdb4fc6d2bb857caf7ef0c59466a270 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8fdb4fc6d2bb857caf7ef0c59466a270 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'tables::components.modal.subheading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tables::modal.subheading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8fdb4fc6d2bb857caf7ef0c59466a270)): ?>
<?php $attributes = $__attributesOriginal8fdb4fc6d2bb857caf7ef0c59466a270; ?>
<?php unset($__attributesOriginal8fdb4fc6d2bb857caf7ef0c59466a270); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8fdb4fc6d2bb857caf7ef0c59466a270)): ?>
<?php $component = $__componentOriginal8fdb4fc6d2bb857caf7ef0c59466a270; ?>
<?php unset($__componentOriginal8fdb4fc6d2bb857caf7ef0c59466a270); ?>
<?php endif; ?><?php /**PATH C:\Users\wiran\Documents\SEMESTER 4\anakhebat\storage\framework\views/cb2ff99ee142ce345142dda1b368c85a.blade.php ENDPATH**/ ?>