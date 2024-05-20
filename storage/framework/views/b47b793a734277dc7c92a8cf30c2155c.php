<?php $slotContents = get_defined_vars(); $slots = collect([
    'trigger',
])->mapWithKeys(fn (string $slot): array => [$slot => $slotContents[$slot] ?? null])->all(); unset($slotContents) ?>

<?php if (isset($component)) { $__componentOriginal7d097d642da69788bf899d5dad94dd25 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d097d642da69788bf899d5dad94dd25 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-support::components.dropdown.index','data' => ['attributes' => \Filament\Support\prepare_inherited_attributes($attributes)->merge($slots),'darkMode' => config('filament.dark_mode')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-support::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Filament\Support\prepare_inherited_attributes($attributes)->merge($slots)),'dark-mode' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('filament.dark_mode'))]); ?>
    <?php echo e($slot); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d097d642da69788bf899d5dad94dd25)): ?>
<?php $attributes = $__attributesOriginal7d097d642da69788bf899d5dad94dd25; ?>
<?php unset($__attributesOriginal7d097d642da69788bf899d5dad94dd25); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d097d642da69788bf899d5dad94dd25)): ?>
<?php $component = $__componentOriginal7d097d642da69788bf899d5dad94dd25; ?>
<?php unset($__componentOriginal7d097d642da69788bf899d5dad94dd25); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\anakhebat\vendor\filament\filament\src\/../resources/views/components/dropdown/index.blade.php ENDPATH**/ ?>