<div
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)); ?>

>
    <?php echo e($getChildSchema()); ?>

</div>
<?php /**PATH C:\Users\kaikg\Downloads\logus-capital\vendor\filament\schemas\resources\views/components/grid.blade.php ENDPATH**/ ?>