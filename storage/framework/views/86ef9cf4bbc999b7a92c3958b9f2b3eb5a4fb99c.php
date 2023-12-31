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
        
        
        

        <div class="flex md:space-x-5 app_height overflow-hidden relative rtl:space-x-reverse">
            <div class="todo-sidebar ">
                <div class="h-full card">
                    <div class="card-body py-6 h-full flex flex-col">
                        <div class="flex-1 h-full px-6">
                            <button class="btn inline-flex justify-center btn-dark w-full" data-bs-toggle="modal" data-bs-target="#newTodoModal">
                                <span class="flex items-center">
                                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2" icon="ph:plus-bold"></iconify-icon>
                                    <span>Add Task</span>
                                </span>
                            </button>
                        </div>
                        <div class="h-full px-6 " data-simplebar="data-simplebar">
                            <ul class="todo-categories list mt-6">
                                <?php if (isset($component)) { $__componentOriginal81ff644930d9174d3610727621461969b321ff75 = $component; } ?>
<?php $component = App\View\Components\Todo\Topfilter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('todo.topfilter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Todo\Topfilter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81ff644930d9174d3610727621461969b321ff75)): ?>
<?php $component = $__componentOriginal81ff644930d9174d3610727621461969b321ff75; ?>
<?php unset($__componentOriginal81ff644930d9174d3610727621461969b321ff75); ?>
<?php endif; ?>
                            </ul>
                            <div class="block py-4 text-slate-800 dark:text-slate-400 font-semibold text-xs uppercase">
                                Tags
                            </div>
                            <ul class="todo-categories list">
                                <?php if (isset($component)) { $__componentOriginalc10bbd78c19efa5631dd6b442cd556a752c3efd5 = $component; } ?>
<?php $component = App\View\Components\Todo\Bottomfilter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('todo.bottomfilter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Todo\Bottomfilter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc10bbd78c19efa5631dd6b442cd556a752c3efd5)): ?>
<?php $component = $__componentOriginalc10bbd78c19efa5631dd6b442cd556a752c3efd5; ?>
<?php unset($__componentOriginalc10bbd78c19efa5631dd6b442cd556a752c3efd5); ?>
<?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="todo-overlay"></div>
            <div class="flex-1 md:w-[calc(100%-320px)]">
                <div class="h-full card">
                    <div class="p-0  h-full relative card-body">
                        <?php if (isset($component)) { $__componentOriginalcd1ed1e24418eaacfe7b771be998478a59dfccad = $component; } ?>
<?php $component = App\View\Components\Todo\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('todo.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Todo\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd1ed1e24418eaacfe7b771be998478a59dfccad)): ?>
<?php $component = $__componentOriginalcd1ed1e24418eaacfe7b771be998478a59dfccad; ?>
<?php unset($__componentOriginalcd1ed1e24418eaacfe7b771be998478a59dfccad); ?>
<?php endif; ?>
                        <div class="h-full all-todos overflow-x-hidden" data-simplebar="data-simplebar">
                            <ul class="divide-y divide-slate-100 dark:divide-slate-700 -mb-6 h-full todo-list">
                                <?php if (isset($component)) { $__componentOriginal19cf10e02ece497922ab97a34b57636b4e53300c = $component; } ?>
<?php $component = App\View\Components\Todo\Todos::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('todo.todos'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Todo\Todos::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19cf10e02ece497922ab97a34b57636b4e53300c)): ?>
<?php $component = $__componentOriginal19cf10e02ece497922ab97a34b57636b4e53300c; ?>
<?php unset($__componentOriginal19cf10e02ece497922ab97a34b57636b4e53300c); ?>
<?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.todo.no-result','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('todo.no-result'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="newTodoModal" tabindex="-1" aria-labelledby="newTodoModalLabel" aria-hidden="true">
            <div class="modal-dialog relative w-auto pointer-events-none">
                <div class="modal-content border-none shadow-lg relative flex flex-col lg:w-[576px] w-full pointer-events-auto bg-white bg-clip-padding
                                                rounded-md outline-none text-current">
                    <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                            <h3 class="text-base font-medium text-white dark:text-white capitalize">
                                Add Task
                            </h3>
                            <button type="button" class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                                                            dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-4">
                            <form class="flex flex-col space-y-3">
                                <div class="input-area">
                                    <label for="title" class="form-label">Title</label>
                                    <input id="title" type="text" class="form-control" placeholder="Enter Title">
                                </div>
                                <div>
                                    <label for="assigned" class="form-label">Assignee</label>
                                    <select name="assigned" id="assigneds" class="form-control w-full mt-2 py-2">
                                        <option value="option1" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 1</option>
                                        <option value="option2" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 2</option>
                                        <option value="option3" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 3</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="default-picker" class=" form-label">Default Functionality</label>
                                    <input class="form-control py-2 flatpickr flatpickr-input active" id="default-picker" value="" type="text" readonly="readonly">
                                </div>
                                <div>
                                    <label for="tags" class="form-label">Tag</label>
                                    <select name="tags" id="tagss" class="form-control w-full mt-2 py-2">
                                        <option value="option1" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 1</option>
                                        <option value="option2" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 2</option>
                                        <option value="option3" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 3</option>
                                    </select>
                                </div>
                                <div class="input-area">
                                    <label for="textarea" class="form-label">Description</label>
                                    <textarea name="textarea" id="textarea" rows="3" class="form-control" placeholder="Enter Title"></textarea>
                                </div>
                                <div class="flex items-center justify-end rounded-b dark:border-slate-600">
                                    <button data-bs-dismiss="modal" class="btn inline-flex justify-center text-white bg-black-500">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="editTodoModal" tabindex="-1" aria-labelledby="editTodoModalLabel" aria-hidden="true">
            <div class="modal-dialog relative w-auto pointer-events-none">
                <div class="modal-content border-none shadow-lg relative flex flex-col lg:w-[576px] w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                            <h3 class="text-base font-medium text-white dark:text-white capitalize">
                                Edit Task
                            </h3>
                            <button type="button" class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-4">
                            <form class="flex flex-col space-y-3">
                                <div class="input-area">
                                    <label for="title" class="form-label">Title</label>
                                    <input id="title" type="text" class="form-control" value="Task 01" placeholder="Enter Title">
                                </div>
                                <div>
                                    <label for="assigned" class="form-label">Assignee</label>
                                    <select name="assigned" id="assigneds" class="form-control w-full mt-2 py-2">
                                        <option value="option1" selected class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 1</option>
                                        <option value="option2" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 2</option>
                                        <option value="option3" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 3</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="default-picker" class=" form-label">Default Functionality</label>
                                    <input class="form-control py-2 flatpickr flatpickr-input active" id="default-picker" value="" type="text" readonly="readonly">
                                </div>
                                <div>
                                    <label for="tags" class="form-label">Tag</label>
                                    <select name="tags" id="tagss" class="form-control w-full mt-2 py-2">
                                        <option value="option1" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 1</option>
                                        <option value="option2" selected class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 2</option>
                                        <option value="option3" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 3</option>
                                    </select>
                                </div>
                                <div class="input-area">
                                    <label for="textarea" class="form-label">Description</label>
                                    <textarea name="textarea" id="textarea" rows="3" class="form-control" value="Lorem ipsum dolor sit amet." placeholder="Enter Title">
                                    </textarea>
                                </div>
                                <div class="flex items-center justify-end rounded-b dark:border-slate-600">
                                    <button data-bs-dismiss="modal" class="btn inline-flex justify-center text-white bg-black-500">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->startPush('scripts'); ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/custom/app-todo.js']); ?>
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH D:\laragon\www\dashcode-laravel\resources\views/apps/todo.blade.php ENDPATH**/ ?>