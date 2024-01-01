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
                            <div class="card-title text-slate-900 dark:text-white">Basic Select's</div>
                        </div>
                    </header>
                    <div class="card-text h-full space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="basicSelect" class="form-label">Basic Select</label>
                                <select name="basicSelect" id="basicSelect" class="form-control w-full mt-2">
                                    <option selected="Selected" disabled="disabled" value="none" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">Select
                                        an option</option>
                                    <option value="option1" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">Option 1
                                    </option>
                                    <option value="option2" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">Option 2
                                    </option>
                                    <option value="option3" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">Option 3
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label for="sizeSelect" class="form-label">Size Select</label>
                                <select name="sizeSelect" id="sizeSelect" size="4" class="form-control w-full mt-2">
                                    <option selected="Selected" disabled="disabled" value="none" class="py-1 font-Inter font-normal text-sm text-slate-600">
                                        Select an option</option>
                                    <option value="option1" class="py-1 font-Inter font-normal text-sm text-slate-600">
                                        Option 1</option>
                                    <option value="option2" class="py-1 font-Inter font-normal text-sm text-slate-600">
                                        Option 2</option>
                                    <option value="option3" class="py-1 font-Inter font-normal text-sm text-slate-600">
                                        Option 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">Select2 Select's
                            </div>
                        </div>
                    </header>
                    <div class="card-text h-full space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="select2basic" class="form-label">Basic Select</label>
                                <select name="select2basic" id="select2basic" class="select2 form-control w-full mt-2 py-2">
                                    <option value="option1" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 1
                                    </option>
                                    <option value="option2" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 2
                                    </option>
                                    <option value="option3" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 3
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label for="multiSelect" class="form-label">Multi Select</label>
                                <select name="multiSelect" id="multiSelect" class="select2 form-control w-full mt-2 py-2" multiple="multiple">
                                    <option selected="selected" value="option1" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 1
                                    </option>
                                    <option value="option2" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 2
                                    </option>
                                    <option value="option3" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 3
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label for="multiSelect" class="form-label">Limited selections</label>
                                <select name="multiSelect" id="limitedSelect" class="select2 form-control w-full mt-2 py-2" multiple="multiple">
                                    <option selected="selected" value="option1" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 1
                                    </option>
                                    <option value="option2" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 2
                                    </option>
                                    <option value="option3" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 3
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label for="multiSelect" class="form-label">Grouped Select</label>
                                <select name="multiSelect" id="groupSelect" class="select2 form-control w-full mt-2 py-2">
                                    <optgroup label="Label 1">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </optgroup>
                                    <optgroup label="Label 2">
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                        <option value="6">Six</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->startPush('scripts'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/plugins/Select2.min.js']); ?>
    <script type="module">
        // Form Select Area
        $(".select2").select2({
            placeholder: "Select an Option",
        });

        $("#limitedSelect").select2({
            placeholder: "Select an Option",
            maximumSelectionLength: 2,
        });
    </script>
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH D:\Project\Dashboard\resources\views/elements/forms/select.blade.php ENDPATH**/ ?>