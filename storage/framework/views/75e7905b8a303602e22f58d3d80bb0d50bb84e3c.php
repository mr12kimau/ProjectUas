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



        
        <?php if(session('message') && session('type')): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['message' => session('message'),'type' => session('type')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('message')),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('type'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>


        <div class="space-y-8">
            <div class="overflow-hidden rounded-md">
                <form class="bg-white dark:bg-slate-800 px-7 py-7 "
                action="<?php echo e(route('general-settings.logo')); ?>"
                method="POST"
                enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="grid gap-7 sm:grid-cols-2 lg:grid-cols-3 ">
                        <div class="imageUploadCard">
                            <div class="imageUploadCardHeader">
                                <h3 class=""><?php echo e(__('Logo')); ?></h3>
                            </div>
                            <div class="cardBody">
                                <img id="logoPreview"
                                    class="mx-auto h-36 w-36 rounded-md"
                                    src="<?php echo e($logoDetails['logoSrc']); ?>"
                                    alt="logo">
                                <div class="relative">
                                    <input type="file"
                                        name="logo"
                                        class="defaultButton absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer"
                                        onchange="imagePreview(event, 'logoPreview')"/>
                                    <label class="btn btn-dark !static defaultButton inline-block">
                                        <?php echo e(__('Choose')); ?>

                                    </label>
                                </div>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('logo'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('logo')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>
                        </div>
                        <div class="imageUploadCard">
                            <div class="imageUploadCardHeader">
                                <h3><?php echo e(__('Favicon')); ?></h3>
                            </div>
                            <div class="cardBody">
                                <div class="h-36 w-36 mx-auto rounded-md flex items-center justify-center">
                                    <img id="faviconPreview"
                                        src="<?php echo e($logoDetails['faviconSrc']); ?>"
                                        alt="dark_logo">
                                </div>
                                <div class="relative">
                                    <input type="file"
                                        name="favicon"
                                        class="defaultButton absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer"
                                        onchange="imagePreview(event, 'faviconPreview')"/>
                                    <label class="btn btn-dark !static defaultButton inline-block">
                                        <?php echo e(__('Choose')); ?>

                                    </label>
                                </div>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('favicon'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('favicon')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>
                        </div>
                        <div class="imageUploadCard">
                            <div class="imageUploadCardHeader">
                                <h3><?php echo e(__('Dark Logo')); ?></h3>
                            </div>
                            <div class="cardBody">
                                <img id="darkLogoPreview"
                                    class="mx-auto h-36 w-36 rounded-md"
                                    src="<?php echo e($logoDetails['darkLogoSrc']); ?>"
                                    alt="dark_logo">
                                <div class="relative">
                                    <input type="file"
                                        name="dark_logo"
                                        class="defaultButton absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer"
                                        onchange="imagePreview(event, 'darkLogoPreview')"/>
                                    <label class="btn btn-dark !static defaultButton inline-block">
                                        <?php echo e(__('Choose')); ?>

                                    </label>
                                </div>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('dark_logo'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('dark_logo')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>
                        </div>
                        <div class="imageUploadCard">
                            <div class="imageUploadCardHeader">
                                <h3><?php echo e(__('Guest Logo')); ?></h3>
                            </div>
                            <div class="cardBody">
                                <img id="guestLogoPreview"
                                    class="mx-auto h-36 w-36 rounded-md"
                                    src="<?php echo e($logoDetails['guestLogoSrc']); ?>"
                                    alt="guest_logo">
                                <div class="relative">
                                    <input type="file"
                                        name="guest_logo"
                                        class="defaultButton absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer"
                                        onchange="imagePreview(event, 'guestLogoPreview')"/>
                                    <label class="btn btn-dark !static defaultButton inline-block">
                                        <?php echo e(__('Choose')); ?>

                                    </label>
                                </div>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('guest_logo'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('guest_logo')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>
                        </div>
                        <div class="imageUploadCard">
                            <div class="imageUploadCardHeader">
                                <h3><?php echo e(__('Guest Background')); ?></h3>
                            </div>
                            <div class="cardBody">
                                <img id="guestBackgroundPreview"
                                    class="mx-auto h-36 w-36 rounded-md"
                                    src="<?php echo e($logoDetails['guestBackgroundSrc']); ?>"
                                    alt="guest_background">
                                <div class="relative">
                                    <input type="file"
                                        name="guest_background"
                                        class="defaultButton absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer"
                                        onchange="imagePreview(event, 'guestBackgroundPreview')"/>
                                    <label class="btn btn-dark !static defaultButton inline-block">
                                        <?php echo e(__('Choose')); ?>

                                    </label>
                                </div>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('guest_background'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('guest_background')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <button class="defaultButton btn btn-dark submitButton ml-auto mt-8" type="submit">
                        <?php echo e(__('Save Changes')); ?>

                    </button>
                </form>
            </div>
            <!-- General Settings Card -->
            <div class="rounded-md overflow-hidden">
                <div class="bg-white dark:bg-slate-800 px-5 py-7">
                    <div class="grid md:grid-cols-2 xl:grid-cols-2 gap-7">
                        <?php $__currentLoopData = $envDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <div class="generalSettings"
                                x-data="{open : false}"
                                x-ref="list1">
                                
                                <div class="generalSettingsCardHead">
                                    <h4 class="generalSettingsCardTitle">
                                        <?php echo e($key); ?>

                                    </h4>
                                    <button type="button" onclick="collapsedCard(`<?php echo e($key); ?>`)">
                                        <iconify-icon icon="ic:round-keyboard-arrow-up"
                                                    class="generalSettingsCardIcon<?php echo e($key); ?> transition-all duration-300 text-3xl dark:text-white" >
                                        </iconify-icon>
                                    </button>
                                </div>
                                
                                <div class="settingBox"
                                    id="settingBox<?php echo e($key); ?>">
                                    <form class="space-y-5 sdc"
                                        method="POST"
                                        action="<?php echo e(route('general-settings.update')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>

                                        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="input-group">
                                                <label for="<?php echo e($item['key']); ?>"
                                                    class="font-medium text-sm text-textColor mb-2 inline-block">
                                                    <?php echo e($item['key']); ?>

                                                </label>
                                                <input type="text"
                                                    name="<?php echo e($item['key']); ?>"
                                                    id="<?php echo e($item['key']); ?>"
                                                    class="w-full border border-slate-300 bg-[#FBFBFB] py-[10px] px-4 outline-none focus:outline-none focus:ring-0 focus:border-[#000000] shadow-none !rounded-md text-base text-black overflow=hidden read-only:cursor-not-allowed read-only:bg-slate-200"
                                                    value="<?php echo e($item['data']['value']); ?>"
                                                    placeholder="<?php echo e($item['key']); ?>">
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <button class="defaultButton submitButton btn btn-dark" type="submit">
                                            <?php echo e(__('Save Changes')); ?>

                                        </button>
                                    </form>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->startPush('scripts'); ?>
        <script>

            // IMAGE PREVIEW
            let imagePreview = function (event, id) {
                let output = document.getElementById(id);
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function () {
                    URL.revokeObjectURL(output.src) // free memory
                }
            };

            // COLLPASED CARD
            function collapsedCard(key){
                $('#settingBox'+key).toggleClass('hideContent');
                $('.generalSettingsCardIcon'+key).toggleClass('rotate-icon');
            }

        </script>
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH D:\laragon\www\dashcode-laravel\resources\views/general-settings/edit.blade.php ENDPATH**/ ?>