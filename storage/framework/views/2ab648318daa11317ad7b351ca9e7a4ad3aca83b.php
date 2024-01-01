<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['message','type']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['message','type']); ?>
<?php foreach (array_filter((['message','type']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="alert alert-success light-mode" <?php echo e($attributes->merge(['class' => 'mb-3 alert '.$type])); ?>>
    <div class="flex items-center space-x-3 rtl:space-x-reverse">
        <iconify-icon class="text-2xl flex-0" icon="system-uicons:target"></iconify-icon>
        <p class="flex-1 font-Inter"><?php echo e($message); ?></p>
        <div class="flex-0 text-xl cursor-pointer">
            <button>
                <iconify-icon icon="line-md:close"
                              class="relative top-[2px] " id="close">
                </iconify-icon>
            </button>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>

    <script type="module">
        $("#close").click(function(){
            $(".alert").hide();
        });
    </script>

<?php $__env->stopPush(); ?>
<?php /**PATH D:\Project\Dashboard\resources\views/components/alert.blade.php ENDPATH**/ ?>