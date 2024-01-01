<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'perPageRouteName',
    'data',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'perPageRouteName',
    'data',
]); ?>
<?php foreach (array_filter(([
    'perPageRouteName',
    'data',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="flex flex-wrap gap-3 items-center justify-between pt-8 px-8">
    <div class="font-medium text-sm text-textColor dark:text-white flex items-center">
        <div class="border border-slate-200 dark:border-slate-700 p-2 rounded">
            <form id="perPageForm" method="get" action="<?php echo e(route($perPageRouteName)); ?>">
                <select class="dark:bg-slate-800" x-on:change="document.getElementById('perPageForm').submit()" name="per_page"
                        id="tableRow" class="dropdownTableSelect">
                    <option value="10" <?php if(request()->per_page == 10): echo 'selected'; endif; ?>>
                        <?php echo e(__('10')); ?>

                    </option>
                    <option value="15" <?php if(request()->per_page == 15): echo 'selected'; endif; ?>>
                        <?php echo e(__('15')); ?>

                    </option>
                    <option value="25" <?php if(request()->per_page == 25): echo 'selected'; endif; ?>>
                        <?php echo e(__('25')); ?>

                    </option>
                </select>
            </form>
        </div>
    </div>
    <div>
        
        <?php echo e($data->links()); ?>

        
    </div>
</div>
<?php /**PATH D:\Project\Dashboard\resources\views/components/table-footer.blade.php ENDPATH**/ ?>