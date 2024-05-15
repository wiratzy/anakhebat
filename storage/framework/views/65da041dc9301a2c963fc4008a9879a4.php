<?php $slotContents = get_defined_vars(); $slots = collect([
    'actions',
    'content',
    'footer',
    'header',
    'heading',
    'subheading',
    'trigger',
])->mapWithKeys(fn (string $slot): array => [$slot => $slotContents[$slot] ?? null])->all(); unset($slotContents) ?>

<?php if (isset($component)) { $__componentOriginal7d7d59c7eff0c0fd19d35737ec2419c6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d7d59c7eff0c0fd19d35737ec2419c6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-support::components.modal.index','data' => ['attributes' => \Filament\Support\prepare_inherited_attributes($attributes)->merge($slots),'darkMode' => config('tables.dark_mode'),'headingComponent' => 'tables::modal.heading','hrComponent' => 'tables::hr','subheadingComponent' => 'tables::modal.subheading']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-support::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Filament\Support\prepare_inherited_attributes($attributes)->merge($slots)),'dark-mode' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('tables.dark_mode')),'heading-component' => 'tables::modal.heading','hr-component' => 'tables::hr','subheading-component' => 'tables::modal.subheading']); ?>
    <?php echo e($slot); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d7d59c7eff0c0fd19d35737ec2419c6)): ?>
<?php $attributes = $__attributesOriginal7d7d59c7eff0c0fd19d35737ec2419c6; ?>
<?php unset($__attributesOriginal7d7d59c7eff0c0fd19d35737ec2419c6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d7d59c7eff0c0fd19d35737ec2419c6)): ?>
<?php $component = $__componentOriginal7d7d59c7eff0c0fd19d35737ec2419c6; ?>
<?php unset($__componentOriginal7d7d59c7eff0c0fd19d35737ec2419c6); ?>
<?php endif; ?>
<?php /**PATH C:\Users\wiran\Desktop\anakhebat\vendor\filament\tables\src\/../resources/views/components/modal/index.blade.php ENDPATH**/ ?>