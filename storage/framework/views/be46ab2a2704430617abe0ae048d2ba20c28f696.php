<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'color' => 'primary',
    'darkMode' => false,
    'disabled' => false,
    'form' => null,
    'icon' => null,
    'iconPosition' => 'before',
    'keyBindings' => null,
    'outlined' => false,
    'size' => 'md',
    'tag' => 'button',
    'tooltip' => null,
    'type' => 'button',
    'labelSrOnly' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'color' => 'primary',
    'darkMode' => false,
    'disabled' => false,
    'form' => null,
    'icon' => null,
    'iconPosition' => 'before',
    'keyBindings' => null,
    'outlined' => false,
    'size' => 'md',
    'tag' => 'button',
    'tooltip' => null,
    'type' => 'button',
    'labelSrOnly' => false,
]); ?>
<?php foreach (array_filter(([
    'color' => 'primary',
    'darkMode' => false,
    'disabled' => false,
    'form' => null,
    'icon' => null,
    'iconPosition' => 'before',
    'keyBindings' => null,
    'outlined' => false,
    'size' => 'md',
    'tag' => 'button',
    'tooltip' => null,
    'type' => 'button',
    'labelSrOnly' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $buttonClasses = array_merge([
        "filament-button filament-button-size-{$size} inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset",
        'dark:focus:ring-offset-0' => $darkMode,
        'opacity-70 cursor-not-allowed pointer-events-none' => $disabled,
        'min-h-[2.25rem] px-4 text-sm' => $size === 'md',
        'min-h-[2rem] px-3 text-sm' => $size === 'sm',
        'min-h-[2.75rem] px-6 text-lg' => $size === 'lg',
    ], $outlined ? [
        'shadow focus:ring-white' => $color !== 'secondary',
        'text-primary-600 border-primary-600 hover:bg-primary-600/20 focus:bg-primary-700/20 focus:ring-offset-primary-700' => $color === 'primary',
        'text-success-600 border-success-600 hover:bg-success-600/20 focus:bg-success-700/20 focus:ring-offset-success-700' => $color === 'success',
        'text-danger-600 border-danger-600 hover:bg-danger-600/20 focus:bg-danger-700/20 focus:ring-offset-danger-700' => $color === 'danger',
        'text-warning-600 border-warning-600 hover:bg-warning-600/20 focus:bg-warning-700/20 focus:ring-offset-warning-700' => $color === 'warning',
        'text-gray-600 border-gray-600 hover:bg-gray-600/20 focus:bg-gray-700/20 focus:ring-offset-gray-700' => $color === 'gray',
        'text-gray-800 border-gray-300 hover:bg-gray-50 focus:ring-primary-600 focus:text-primary-600 focus:bg-primary-50 focus:border-primary-600' => $color === 'secondary',
        'dark:text-primary-500 dark:border-primary-500 dark:hover:bg-primary-500/20 dark:focus:bg-primary-600/20 dark:focus:ring-offset-primary-600' => $color === 'primary' && $darkMode,
        'dark:text-success-500 dark:border-success-500 dark:hover:bg-success-500/20 dark:focus:bg-success-600/20 dark:focus:ring-offset-success-600' => $color === 'success' && $darkMode,
        'dark:text-danger-500 dark:border-danger-500 dark:hover:bg-danger-500/20 dark:focus:bg-danger-600/20 dark:focus:ring-offset-danger-600' => $color === 'danger' && $darkMode,
        'dark:text-warning-500 dark:border-warning-500 dark:hover:bg-warning-500/20 dark:focus:bg-warning-600/20 dark:focus:ring-offset-warning-600' => $color === 'warning' && $darkMode,
        'dark:text-gray-400 dark:border-gray-400 dark:hover:bg-gray-400/20 dark:focus:bg-gray-600/20 dark:focus:ring-offset-gray-600' => $color === 'gray' && $darkMode,
        'dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-500/20 dark:text-gray-200 dark:focus:text-primary-400 dark:focus:border-primary-400 dark:focus:bg-gray-800/20' => $color === 'secondary' && $darkMode,
    ] : [
        'text-white shadow focus:ring-white border-transparent' => $color !== 'secondary',
        'bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700' => $color === 'primary',
        'bg-success-600 hover:bg-success-500 focus:bg-success-700 focus:ring-offset-success-700' => $color === 'success',
        'bg-danger-600 hover:bg-danger-500 focus:bg-danger-700 focus:ring-offset-danger-700' => $color === 'danger',
        'bg-warning-600 hover:bg-warning-500 focus:bg-warning-700 focus:ring-offset-warning-700' => $color === 'warning',
        'bg-gray-600 hover:bg-gray-500 focus:bg-gray-700 focus:ring-offset-gray-700' => $color === 'gray',
        'text-gray-800 bg-white border-gray-300 hover:bg-gray-50 focus:ring-primary-600 focus:text-primary-600 focus:bg-primary-50 focus:border-primary-600' => $color === 'secondary',
        'dark:bg-gray-800 dark:hover:bg-gray-700 dark:border-gray-600 dark:hover:border-gray-500 dark:text-gray-200 dark:focus:text-primary-400 dark:focus:border-primary-400 dark:focus:bg-gray-800' => $color === 'secondary' && $darkMode,
    ]);

    $iconClasses = \Illuminate\Support\Arr::toCssClasses([
        'filament-button-icon',
        'w-4 h-4' => $size === 'sm',
        'w-5 h-5' => $size === 'md',
        'w-6 h-6' => $size === 'lg',
        'mr-1 -ml-2 rtl:ml-1 rtl:-mr-2' => ($iconPosition === 'before') && ($size === 'md') && (! $labelSrOnly),
        'mr-2 -ml-3 rtl:ml-2 rtl:-mr-3' => ($iconPosition === 'before') && ($size === 'lg') && (! $labelSrOnly),
        'mr-1 -ml-1.5 rtl:ml-1 rtl:-mr-1.5' => ($iconPosition === 'before') && ($size === 'sm') && (! $labelSrOnly),
        'ml-1 -mr-2 rtl:mr-1 rtl:-ml-2' => ($iconPosition === 'after') && ($size === 'md') && (! $labelSrOnly),
        'ml-2 -mr-3 rtl:mr-2 rtl:-ml-3' => ($iconPosition === 'after') && ($size === 'lg') && (! $labelSrOnly),
        'ml-1 -mr-1.5 rtl:mr-1 rtl:-ml-1.5' => ($iconPosition === 'after') && ($size === 'sm') && (! $labelSrOnly),
    ]);

    $hasLoadingIndicator = filled($attributes->get('wire:target')) || filled($attributes->get('wire:click')) || (($type === 'submit') && filled($form));

    if ($hasLoadingIndicator) {
        $loadingIndicatorTarget = html_entity_decode($attributes->get('wire:target', $attributes->get('wire:click', $form)), ENT_QUOTES);
    }
?>

<?php if($tag === 'button'): ?>
    <button
        <?php if($keyBindings): ?>
            x-mousetrap.global.<?php echo e(collect($keyBindings)->map(fn (string $keyBinding): string => str_replace('+', '-', $keyBinding))->implode('.')); ?>

        <?php endif; ?>
        <?php if($tooltip): ?>
            x-tooltip.raw="<?php echo e($tooltip); ?>"
        <?php endif; ?>
        type="<?php echo e($type); ?>"
        wire:loading.attr="disabled"
        <?php echo $hasLoadingIndicator ? 'wire:loading.class.delay="opacity-70 cursor-wait"' : ''; ?>

        <?php echo ($hasLoadingIndicator && $loadingIndicatorTarget) ? "wire:target=\"{$loadingIndicatorTarget}\"" : ''; ?>

        <?php echo $disabled ? 'disabled' : ''; ?>

        x-data="{
            form: null,
            isUploadingFile: false,
        }"
        <?php if (! ($disabled)): ?>
            x-bind:class="{ 'opacity-70 cursor-wait': isUploadingFile }"
        <?php endif; ?>
        x-bind:disabled="isUploadingFile"
        x-init="
            form = $el.closest('form')

            form?.addEventListener('file-upload-started', () => {
                isUploadingFile = true
            })

            form?.addEventListener('file-upload-finished', () => {
                isUploadingFile = false
            })
        "
        <?php echo e($attributes->class($buttonClasses)); ?>

    >
        <?php if($iconPosition === 'before'): ?>
            <?php if($icon): ?>
                <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:loading.remove.delay' => $hasLoadingIndicator,'wire:target' => $hasLoadingIndicator ? $loadingIndicatorTarget : false,'class' => $iconClasses]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if($hasLoadingIndicator): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-support::components.loading-indicator','data' => ['xCloak' => true,'wire:loading.delay' => true,'wire:target' => $loadingIndicatorTarget,'class' => $iconClasses]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-support::loading-indicator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-cloak' => true,'wire:loading.delay' => true,'wire:target' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($loadingIndicatorTarget),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconClasses)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>

        <span class="flex items-center gap-1">
            <?php if(($type === 'submit') && filled($form)): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-support::components.loading-indicator','data' => ['xShow' => 'isUploadingFile','xCloak' => true,'class' => $iconClasses]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-support::loading-indicator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-show' => 'isUploadingFile','x-cloak' => true,'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconClasses)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <span x-show="isUploadingFile" x-cloak>
                    <?php echo e(__('filament-support::components/button.messages.uploading_file')); ?>

                </span>

                <span x-show="! isUploadingFile" class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'sr-only' => $labelSrOnly,
                ]) ?>">
                    <?php echo e($slot); ?>

                </span>
            <?php else: ?>
                <span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'sr-only' => $labelSrOnly,
                ]) ?>">
                    <?php echo e($slot); ?>

                </span>
            <?php endif; ?>
        </span>

        <?php if($iconPosition === 'after'): ?>
            <?php if($icon): ?>
                <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:loading.remove.delay' => $hasLoadingIndicator,'wire:target' => $hasLoadingIndicator ? $loadingIndicatorTarget : false,'class' => $iconClasses]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if($hasLoadingIndicator): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-support::components.loading-indicator','data' => ['xCloak' => true,'wire:loading.delay' => true,'wire:target' => $loadingIndicatorTarget,'class' => $iconClasses]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-support::loading-indicator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-cloak' => true,'wire:loading.delay' => true,'wire:target' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($loadingIndicatorTarget),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconClasses)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    </button>
<?php elseif($tag === 'a'): ?>
    <a
        <?php if($keyBindings || $tooltip): ?>
            x-data="{}"
        <?php endif; ?>
        <?php if($keyBindings): ?>
            x-mousetrap.global.<?php echo e(collect($keyBindings)->map(fn (string $keyBinding): string => str_replace('+', '-', $keyBinding))->implode('.')); ?>

        <?php endif; ?>
        <?php if($tooltip): ?>
            x-tooltip.raw="<?php echo e($tooltip); ?>"
        <?php endif; ?>
        <?php echo e($attributes->class($buttonClasses)); ?>

    >
        <?php if($icon && $iconPosition === 'before'): ?>
            <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => $iconClasses]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
        <?php endif; ?>

        <span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'sr-only' => $labelSrOnly,
        ]) ?>">
            <?php echo e($slot); ?>

        </span>

        <?php if($icon && $iconPosition === 'after'): ?>
            <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => $iconClasses]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
        <?php endif; ?>
    </a>
<?php endif; ?>
<?php /**PATH D:\manajemen-surat\vendor\filament\support\src\/../resources/views/components/button.blade.php ENDPATH**/ ?>