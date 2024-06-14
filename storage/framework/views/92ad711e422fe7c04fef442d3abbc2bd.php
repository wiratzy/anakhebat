<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'active' => false,
    'activeIcon',
    'badge' => null,
    'badgeColor' => null,
    'icon',
    'iconColor' => null,
    'shouldOpenUrlInNewTab' => false,
    'url',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'active' => false,
    'activeIcon',
    'badge' => null,
    'badgeColor' => null,
    'icon',
    'iconColor' => null,
    'shouldOpenUrlInNewTab' => false,
    'url',
]); ?>
<?php foreach (array_filter(([
    'active' => false,
    'activeIcon',
    'badge' => null,
    'badgeColor' => null,
    'icon',
    'iconColor' => null,
    'shouldOpenUrlInNewTab' => false,
    'url',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<li
    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'filament-sidebar-item overflow-hidden',
        'filament-sidebar-item-active' => $active,
    ]); ?>"
>
    <a
        href="<?php echo e($url); ?>"
        <?php echo $shouldOpenUrlInNewTab ? 'target="_blank"' : ''; ?>

        x-on:click="window.matchMedia(`(max-width: 1024px)`).matches && $store.sidebar.close()"
        <?php if(config('filament.layout.sidebar.is_collapsible_on_desktop')): ?>
            x-data="{ tooltip: {} }"
            x-init="
                Alpine.effect(() => {
                    if (Alpine.store('sidebar').isOpen) {
                        tooltip = false
                    } else {
                        tooltip = {
                            content: <?php echo e(\Illuminate\Support\Js::from($slot->toHtml())); ?>,
                            theme: Alpine.store('theme') === 'light' ? 'dark' : 'light',
                            placement: document.dir === 'rtl' ? 'left' : 'right',
                        }
                    }
                })
            "
            x-tooltip.html="tooltip"
        <?php endif; ?>
        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'flex items-center justify-center gap-3 rounded-lg px-3 py-2 font-medium transition',
            'hover:bg-gray-500/5 focus:bg-gray-500/5' => ! $active,
            'dark:text-gray-300 dark:hover:bg-gray-700' => (! $active) && config('filament.dark_mode'),
            'bg-primary-500 text-white' => $active,
        ]); ?>"
    >
        <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => ($active && $activeIcon) ? $activeIcon : $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 
                \Illuminate\Support\Arr::toCssClasses([
                    'h-5 w-5 shrink-0',
                    'text-primary-500' => (! $active) && ($iconColor === 'primary'),
                    'text-danger-500' => (! $active) && ($iconColor === 'danger'),
                    'text-gray-500' => (! $active) && ($iconColor === 'secondary'),
                    'text-success-500' => (! $active) && ($iconColor === 'success'),
                    'text-warning-500' => (! $active) && ($iconColor === 'warning'),
                ])
            ]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>

        <div
            class="flex flex-1"
            <?php if(config('filament.layout.sidebar.is_collapsible_on_desktop')): ?>
                x-show="$store.sidebar.isOpen"
            <?php endif; ?>
        >
            <span>
                <?php echo e($slot); ?>

            </span>
        </div>

        <?php if(filled($badge)): ?>
            <?php if (isset($component)) { $__componentOriginal9e9c2636a77875ef87579737c0f1f167 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9e9c2636a77875ef87579737c0f1f167 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.layouts.app.sidebar.badge','data' => ['badge' => $badge,'badgeColor' => $badgeColor,'active' => $active]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::layouts.app.sidebar.badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['badge' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($badge),'badge-color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($badgeColor),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($active)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9e9c2636a77875ef87579737c0f1f167)): ?>
<?php $attributes = $__attributesOriginal9e9c2636a77875ef87579737c0f1f167; ?>
<?php unset($__attributesOriginal9e9c2636a77875ef87579737c0f1f167); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9e9c2636a77875ef87579737c0f1f167)): ?>
<?php $component = $__componentOriginal9e9c2636a77875ef87579737c0f1f167; ?>
<?php unset($__componentOriginal9e9c2636a77875ef87579737c0f1f167); ?>
<?php endif; ?>
        <?php endif; ?>
    </a>
</li>
<?php /**PATH C:\Users\wiran\Documents\SEMESTER 4\anakhebat\vendor\filament\filament\src\/../resources/views/components/layouts/app/sidebar/item.blade.php ENDPATH**/ ?>