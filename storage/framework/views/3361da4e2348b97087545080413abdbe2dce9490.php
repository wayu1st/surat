<?php if(filled($brand = config('filament.brand'))): ?>
    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'filament-brand text-xl font-bold tracking-tight',
        'dark:text-white' => config('filament.dark_mode'),
    ]) ?>">
        <?php echo e($brand); ?>

    </div>
<?php endif; ?>
<?php /**PATH D:\manajemen-surat\vendor\filament\filament\src\/../resources/views/components/brand.blade.php ENDPATH**/ ?>