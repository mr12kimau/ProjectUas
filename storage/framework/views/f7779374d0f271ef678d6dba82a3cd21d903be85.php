<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['breadcrumbItems' => [], 'pageTitle'=>'Default Title', 'icon' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['breadcrumbItems' => [], 'pageTitle'=>'Default Title', 'icon' => null]); ?>
<?php foreach (array_filter((['breadcrumbItems' => [], 'pageTitle'=>'Default Title', 'icon' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="flex items-center justify-between">
    
    <?php if($icon): ?>
        <span class="icon" style="font-size: 3.5em; vertical-align: middle;"><?php echo $icon; ?> </span>
    <?php endif; ?>
        <h4 class="text-textColor font-Inter font-medium md:text-2xl mr-4 dark:text-white mb-1 sm:mb-0">
            <b><?php echo e(__($pageTitle)); ?></b>
        </h4>



    
    <ul class="m-0 p-0 list-none">
        
        <?php if(empty(!$breadcrumbItems)): ?>
            <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter">
                <a href="<?php echo e(route('dashboards.analytic')); ?>" class="breadcrumbList">
                    <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                </a>
            </li>
        <?php endif; ?>

        <?php $__currentLoopData = $breadcrumbItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumbItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($breadcrumbItem['active']): ?>
                
                <li class="inline-block">
                    <a href="<?php echo e($breadcrumbItem['url']); ?>" class="breadcrumbList breadcrumbActive dark:text-slate-300">
                        <?php echo e(__($breadcrumbItem['name'])); ?>

                    </a>
                </li>
            <?php else: ?>
                
                <li class="inline-block relative text-sm text-primary-500 font-Inter">
                    <a href="<?php echo e($breadcrumbItem['url']); ?>" class="breadcrumbList">
                        <?php echo e(__($breadcrumbItem['name'])); ?>

                        <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH D:\Project\Dashboard\resources\views/components/breadcrumb.blade.php ENDPATH**/ ?>