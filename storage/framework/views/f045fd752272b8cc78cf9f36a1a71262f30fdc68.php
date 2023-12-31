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
        
        
        

        <div class="flex lg:space-x-5 chat-height overflow-hidden relative rtl:space-x-reverse">
            <div class="chat-contact-bar">
                <div class="h-full card">
                    <div class="card-body relative p-0 h-full overflow-hidden">
                        <div class="border-b border-slate-100 dark:border-slate-700 pb-4">
                            <?php if (isset($component)) { $__componentOriginald087fce2928aa4e02d4912a5afa1b7d2ac5800a0 = $component; } ?>
<?php $component = App\View\Components\Chat\Profile::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('chat.profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Chat\Profile::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald087fce2928aa4e02d4912a5afa1b7d2ac5800a0)): ?>
<?php $component = $__componentOriginald087fce2928aa4e02d4912a5afa1b7d2ac5800a0; ?>
<?php unset($__componentOriginald087fce2928aa4e02d4912a5afa1b7d2ac5800a0); ?>
<?php endif; ?>
                        </div>
                        <!-- end profile -->
                        <div class="border-b border-slate-100 dark:border-slate-700 py-1">
                            <div class="search px-3 mx-6 rounded flex items-center space-x-3 rtl:space-x-reverse">
                                <div class="flex-none text-base text-slate-900 dark:text-slate-400">
                                    <iconify-icon icon="bytesize:search"></iconify-icon>
                                </div>
                                <input placeholder="Search..." class="w-full flex-1 block bg-transparent placeholder:font-normal placeholder:text-slate-400 py-2 focus:ring-0
                  focus:outline-none dark:text-slate-200 dark:placeholder:text-slate-400">
                            </div>
                        </div>
                        <!-- end seach -->
                        <div class="contact-height" data-simplebar="data-simplebar">
                            <?php if (isset($component)) { $__componentOriginaleff9480fa763f6c838fd96608437fb6467a1526b = $component; } ?>
<?php $component = App\View\Components\Chat\Contact::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('chat.contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Chat\Contact::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleff9480fa763f6c838fd96608437fb6467a1526b)): ?>
<?php $component = $__componentOriginaleff9480fa763f6c838fd96608437fb6467a1526b; ?>
<?php unset($__componentOriginaleff9480fa763f6c838fd96608437fb6467a1526b); ?>
<?php endif; ?>
                        </div>
                        <!-- end contact -->
                    </div>
                </div>
            </div>
            <div class="chat-overlay"></div>
            <!-- main chat box -->
            <div class="flex-1">
                <div class="parent flex space-x-5 h-full rtl:space-x-reverse">
                    <!-- end main message body -->
                    <div class="flex-1">
                        <div class="h-full card">
                            <div class="p-0 h-full body-class">
                                <?php if (isset($component)) { $__componentOriginal7d2e343a40660dff0c987b2782cc3e443f5862b3 = $component; } ?>
<?php $component = App\View\Components\Chat\Blank::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('chat.blank'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Chat\Blank::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d2e343a40660dff0c987b2782cc3e443f5862b3)): ?>
<?php $component = $__componentOriginal7d2e343a40660dff0c987b2782cc3e443f5862b3; ?>
<?php unset($__componentOriginal7d2e343a40660dff0c987b2782cc3e443f5862b3); ?>
<?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginal9dc6ced26d00052359c0bbe61ff5c7d6ea80f1a4 = $component; } ?>
<?php $component = App\View\Components\Chat\Message::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('chat.message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Chat\Message::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9dc6ced26d00052359c0bbe61ff5c7d6ea80f1a4)): ?>
<?php $component = $__componentOriginal9dc6ced26d00052359c0bbe61ff5c7d6ea80f1a4; ?>
<?php unset($__componentOriginal9dc6ced26d00052359c0bbe61ff5c7d6ea80f1a4); ?>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- right info bar -->
                    <div class="flex-none w-[285px]" id="info-box">
                        <div class="h-full card">
                            <div class="p-0 h-full card-body">
                                <?php if (isset($component)) { $__componentOriginalb10417c294010cdeb66d301ac8f4a214c848da41 = $component; } ?>
<?php $component = App\View\Components\Chat\Info::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('chat.info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Chat\Info::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb10417c294010cdeb66d301ac8f4a214c848da41)): ?>
<?php $component = $__componentOriginalb10417c294010cdeb66d301ac8f4a214c848da41; ?>
<?php unset($__componentOriginalb10417c294010cdeb66d301ac8f4a214c848da41); ?>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->startPush('scripts'); ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/custom/app-chat.js']); ?>
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH D:\Project\dashcode-laravel-full-source-code\resources\views/apps/chat.blade.php ENDPATH**/ ?>