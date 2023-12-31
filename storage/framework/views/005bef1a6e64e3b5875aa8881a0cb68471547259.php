<?php if (isset($component)) { $__componentOriginal4fd8e55ee701dd0fadc4e108716f3e269bc33cb7 = $component; } ?>
<?php $component = App\View\Components\ErrorLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('error-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ErrorLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="bg-slate-100 dark:bg-slate-900">
        <div class="min-h-screen flex flex-col justify-center items-center text-center py-20">
            <img src="<?php echo e(asset('/images/403.svg')); ?>" alt="image" />
            <div class="max-w-[546px] mx-auto w-full mt-12">
                <h4 class="text-slate-900 mb-4 font-Inter text-3xl leading-9 font-semibold"><?php echo e(__('Access Denied')); ?></h4>
                <div class="text-slate-600 dark:text-slate-300 text-base font-normal mb-8">
                    <?php echo e(__('You don\'t have permission to view this page.')); ?>

                </div>
            </div>
            <div class="max-w-[300px] mx-auto w-full">
                <a href="<?php echo e(route('dashboards.analytic')); ?>" class="defaultButton">
                    <?php echo e(__('Go To Homepage')); ?>

                </a>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4fd8e55ee701dd0fadc4e108716f3e269bc33cb7)): ?>
<?php $component = $__componentOriginal4fd8e55ee701dd0fadc4e108716f3e269bc33cb7; ?>
<?php unset($__componentOriginal4fd8e55ee701dd0fadc4e108716f3e269bc33cb7); ?>
<?php endif; ?>
<?php /**PATH D:\laragon\www\dashcode-laravel\resources\views/errors/403.blade.php ENDPATH**/ ?>