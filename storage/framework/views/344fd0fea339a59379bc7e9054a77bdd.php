<p
    data-validation-error
    <?php echo e($attributes->class([
            'filament-forms-field-wrapper-error-message text-sm text-danger-600',
            'dark:text-danger-400' => config('forms.dark_mode'),
        ])); ?>

>
    <?php echo e($slot); ?>

</p>
<?php /**PATH C:\Users\wiran\Documents\SEMESTER 4\anakhebat\vendor\filament\forms\src\/../resources/views/components/field-wrapper/error-message.blade.php ENDPATH**/ ?>