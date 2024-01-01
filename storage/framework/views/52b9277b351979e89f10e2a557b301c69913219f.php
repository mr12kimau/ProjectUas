<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="space-y-8">
        <div>
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['pageTitle' => $pageTitle,'breadcrumbItems' => $breadcrumbItems]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['page-title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pageTitle),'breadcrumb-items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($breadcrumbItems)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>

        <div class="space-y-6">
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">Radio Button</div>
                        </div>
                    </header>
                    <div class="card-text h-full space-y-4">
                        <div class="flex items-center space-x-7 flex-wrap">
                            <div class="basicRadio">
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" class="hidden" name="basicradios" value="secondary-500" checked="checked">
                                    <span class="flex-none bg-white dark:bg-slate-500 rounded-full border inline-flex ltr:mr-2 rtl:ml-2 relative transition-all
                                            duration-150 h-[16px] w-[16px] border-slate-400 dark:border-slate-600 dark:ring-slate-700"></span>
                                    <span class="text-secondary-500 text-sm leading-6 capitalize">Checked</span>
                                </label>
                            </div>
                            <div class="basicRadio">
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" class="hidden" name="basicradios" value="secondary-500">
                                    <span class="flex-none bg-white dark:bg-slate-500 rounded-full border inline-flex ltr:mr-2 rtl:ml-2 relative transition-all
                                                duration-150 h-[16px] w-[16px] border-slate-400 dark:border-slate-600 dark:ring-slate-700"></span>
                                    <span class="text-secondary-500 text-sm leading-6 capitalize">Unchecked</span>
                                </label>
                            </div>
                            <div class="basicRadio">
                                <label class="flex items-center cursor-not-allowed">
                                    <input type="radio" class="hidden" name="diasbaledradio" value="secondary-500" checked="checked" disabled="disabled">
                                    <span class="flex-none bg-white dark:bg-slate-500 rounded-full border inline-flex ltr:mr-2 rtl:ml-2 relative transition-all
                                                    duration-150 h-[16px] w-[16px] border-slate-400 dark:border-slate-600 dark:ring-slate-700"></span>
                                    <span class="text-secondary-500 text-sm leading-6 capitalize">Checked</span>
                                </label>
                            </div>
                            <div class="basicRadio">
                                <label class="flex items-center cursor-not-allowed">
                                    <input type="radio" class="hidden" name="diasbaledradio" value="secondary-500" disabled="disabled">
                                    <span class="flex-none bg-white dark:bg-slate-500 rounded-full border inline-flex ltr:mr-2 rtl:ml-2 relative transition-all
                                                        duration-150 h-[16px] w-[16px] border-slate-400 dark:border-slate-600 dark:ring-slate-700"></span>
                                    <span class="text-secondary-500 text-sm leading-6 capitalize">Unchecked</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">Color Radio Button</div>
                        </div>
                    </header>
                    <div class="card-text h-full space-y-4">
                        <div class="flex items-center space-x-7 flex-wrap">
                            <?php
                                $basicColor = [
                                    "primary",
                                    "secondary",
                                    "info",
                                    "success",
                                    "warning",
                                    "danger"
                                ]
                            ?>
                            <?php $__currentLoopData = $basicColor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="<?php echo e($item); ?>-radio">
                                    <label class="flex items-center cursor-pointer">
                                        <input type="radio" class="hidden" name="coloredRadio" value="<?php echo e($item); ?>-500" checked="checked">
                                        <span class="flex-none bg-white dark:bg-slate-500 rounded-full border inline-flex ltr:mr-2 rtl:ml-2 relative transition-all
                                                                duration-150 h-[16px] w-[16px] border-slate-400 dark:border-slate-600 dark:ring-slate-700"></span>
                                        <span class="text-<?php echo e($item); ?>-500 text-sm leading-6 capitalize"><?php echo e($item); ?></span>
                                    </label>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">Array Radio Button</div>
                        </div>
                    </header>
                    <div class="card-text h-full space-y-4">
                        <div class="space-y-2">
                            <div class="secondary-radio">
                                <label class="flex items-center cursor-pointer  ">
                                    <input type="radio" class="hidden" name="arrayRadio[]" value="Apple">
                                    <span class="flex-none bg-white dark:bg-slate-500 rounded-full border inline-flex ltr:mr-2 rtl:ml-2 relative transition-all
                                                                duration-150 h-[16px] w-[16px] border-slate-400 dark:border-slate-600 dark:ring-slate-700"></span>
                                    <span class="text-slate-900 font-Inter font-normal text-sm leading-6 capitalize dark:text-slate-300">Apple</span>
                                </label>
                            </div>
                            <div class="secondary-radio">
                                <label class="flex items-center cursor-pointer  ">
                                    <input type="radio" class="hidden" name="arrayRadio[]" value="Banana">
                                    <span class="flex-none bg-white dark:bg-slate-500 rounded-full border inline-flex ltr:mr-2 rtl:ml-2 relative transition-all
                                                                    duration-150 h-[16px] w-[16px] border-slate-400 dark:border-slate-600 dark:ring-slate-700"></span>
                                    <span class="text-slate-900 font-Inter font-normal text-sm leading-6 capitalize dark:text-slate-300">Banana</span>
                                </label>
                            </div>
                            <div class="secondary-radio">
                                <label class="flex items-center cursor-pointer  ">
                                    <input type="radio" class="hidden" name="arrayRadio[]" value="Orange">
                                    <span class="flex-none bg-white dark:bg-slate-500 rounded-full border inline-flex ltr:mr-2 rtl:ml-2 relative transition-all
                                                                        duration-150 h-[16px] w-[16px] border-slate-400 dark:border-slate-600 dark:ring-slate-700"></span>
                                    <span class="text-slate-900 font-Inter font-normal text-sm leading-6 capitalize dark:text-slate-300">Orange</span>
                                </label>
                            </div>
                        </div>
                        <p>Selected Items: [<span id="radioSelectedItems"></span>]
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH D:\Project\Dashboard\resources\views/elements/forms/radio.blade.php ENDPATH**/ ?>