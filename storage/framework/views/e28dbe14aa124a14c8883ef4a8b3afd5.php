<?php if (isset($component)) { $__componentOriginalfe479d4a9cd593a22f73deb26942e78b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfe479d4a9cd593a22f73deb26942e78b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-support::components.button','data' => ['attributes' => \Filament\Support\prepare_inherited_attributes($attributes),'darkMode' => config('filament.dark_mode')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-support::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Filament\Support\prepare_inherited_attributes($attributes)),'dark-mode' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('filament.dark_mode'))]); ?>
    <?php echo e($slot); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfe479d4a9cd593a22f73deb26942e78b)): ?>
<?php $attributes = $__attributesOriginalfe479d4a9cd593a22f73deb26942e78b; ?>
<?php unset($__attributesOriginalfe479d4a9cd593a22f73deb26942e78b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfe479d4a9cd593a22f73deb26942e78b)): ?>
<?php $component = $__componentOriginalfe479d4a9cd593a22f73deb26942e78b; ?>
<?php unset($__componentOriginalfe479d4a9cd593a22f73deb26942e78b); ?>
<?php endif; ?>
<?php /**PATH C:\Users\wiran\Desktop\anakhebat\vendor\filament\filament\src\/../resources/views/components/button.blade.php ENDPATH**/ ?>