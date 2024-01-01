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

        <div class="grid xl:grid-cols-2 grid-cols-1 gap-5">

            <!-- BEGIN: Basic Table -->
            <div class="card">
                <header class=" card-header noborder">
                    <h4 class="card-title">Basic Table
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div class="overflow-x-auto -mx-6">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden ">
                                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                    <thead class=" border-t border-slate-100 dark:border-slate-800">
                                        <tr>
                                            <th scope="col" class=" table-th ">
                                               AGE
                                            </th>
                                            <th scope="col" class=" table-th ">
                                               FIRST NAME
                                            </th>
                                            <th scope="col" class=" table-th ">
                                               EMAIL
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                        <?php $__currentLoopData = $tableData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="table-td"><?php echo e($item['age']); ?></td>
                                                <td class="table-td"><?php echo e($item['first_name']); ?></td>
                                                <td class="table-td "><?php echo e($item['email']); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Table -->


            <!-- BEGIN: Table Header -->
            <div class="card">
                <header class=" card-header noborder">
                    <h4 class="card-title">Table Head
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div class="overflow-x-auto -mx-6">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden ">
                                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                    <thead class="bg-slate-200 dark:bg-slate-700">
                                        <tr>
                                            <th scope="col" class=" table-th ">
                                               AGE
                                            </th>
                                            <th scope="col" class=" table-th ">
                                               FIRST NAME
                                            </th>
                                            <th scope="col" class=" table-th ">
                                               EMAIL
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                        <?php $__currentLoopData = $tableData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="table-td"><?php echo e($item['age']); ?></td>
                                                <td class="table-td"><?php echo e($item['first_name']); ?></td>
                                                <td class="table-td "><?php echo e($item['email']); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Table Header -->


            <!-- BEGIN: Bordered Table -->
            <div class="card">
                <header class=" card-header noborder">
                    <h4 class="card-title">Bordered Table
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div class="overflow-x-auto ">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden ">
                                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                    <thead class="">
                                        <tr>
                                            <th scope="col" class=" table-th border border-slate-100 dark:bg-slate-800 dark:border-slate-700">
                                               AGE
                                            </th>
                                            <th scope="col" class=" table-th border border-slate-100 dark:bg-slate-800 dark:border-slate-700">
                                               FIRST NAME
                                            </th>
                                            <th scope="col" class=" table-th border border-slate-100 dark:bg-slate-800 dark:border-slate-700">
                                               EMAIL
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                        <?php $__currentLoopData = $tableData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="table-td border border-slate-100 dark:bg-slate-800 dark:border-slate-700"><?php echo e($item['age']); ?></td>
                                                <td class="table-td border border-slate-100 dark:bg-slate-800 dark:border-slate-700"><?php echo e($item['first_name']); ?></td>
                                                <td class="table-td border border-slate-100 dark:bg-slate-800 dark:border-slate-700"><?php echo e($item['email']); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Bordered Table -->


            <!-- BEGIN: Borderless Table -->
            <div class="card">
                <header class=" card-header noborder">
                    <h4 class="card-title">Borderless Table
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div class="overflow-x-auto ">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden ">
                                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                    <thead class="">
                                        <tr>
                                            <th scope="col" class=" table-th ">
                                                AGE
                                            </th>
                                            <th scope="col" class=" table-th ">
                                                FIRST NAME
                                            </th>
                                            <th scope="col" class=" table-th ">
                                                EMAIL
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white dark:bg-slate-800 ">
                                        <?php $__currentLoopData = $tableData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="table-td "><?php echo e($item['age']); ?></td>
                                                <td class="table-td "><?php echo e($item['first_name']); ?></td>
                                                <td class="table-td  "><?php echo e($item['email']); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Borderless Table -->


            <!-- BEGIN: Striped Tables -->
            <div class="card">
                <header class=" card-header noborder">
                    <h4 class="card-title">Striped Rows
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div class="overflow-x-auto -mx-6">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden ">
                                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                    <thead class="bg-slate-200 dark:bg-slate-700">
                                        <tr>
                                            <th scope="col" class=" table-th ">
                                                ID
                                            </th>
                                            <th scope="col" class=" table-th ">
                                                First name
                                            </th>
                                            <th scope="col" class=" table-th ">
                                                Email
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                        <?php $__currentLoopData = $tableData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="even:bg-slate-50 dark:even:bg-slate-700">
                                            <td class="table-td"><?php echo e($item['age']); ?></td>
                                            <td class="table-td"><?php echo e($item['first_name']); ?></td>
                                            <td class="table-td "><?php echo e($item['email']); ?></td>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Striped Tables -->

            <!-- BEGIN: Hover Tables -->
            <div class="card">
                <header class=" card-header noborder">
                    <h4 class="card-title">Hover Table
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div class="overflow-x-auto -mx-6">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden ">
                                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                    <thead class="bg-slate-200 dark:bg-slate-700">
                                        <tr>
                                            <th scope="col" class=" table-th ">
                                                ID
                                            </th>
                                            <th scope="col" class=" table-th ">
                                                First Name
                                            </th>
                                            <th scope="col" class=" table-th ">
                                                Email
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                        <?php $__currentLoopData = $tableData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="hover:bg-slate-200 dark:hover:bg-slate-700">
                                                <td class="table-td"><?php echo e($item['age']); ?></td>
                                                <td class="table-td"><?php echo e($item['first_name']); ?></td>
                                                <td class="table-td "><?php echo e($item['email']); ?></td>
                                            </tr>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Hover Tables -->
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH D:\Project\Dashboard\resources\views/elements/tables/basic.blade.php ENDPATH**/ ?>