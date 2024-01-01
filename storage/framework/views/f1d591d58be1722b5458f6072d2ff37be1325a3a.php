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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['pageTitle' => $pageTitle]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['page-title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pageTitle)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>

        <div class="card xl:col-span-2">
            <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                    <div class="flex-1">
                        <div class="card-title text-slate-900 dark:text-white">Tambahkan Produk Baru</div>
                    </div>
                </header>

                <div class="card-text h-full">
                    <!-- Pastikan action mengarah ke route yang benar dan tambahkan <?php echo csrf_field(); ?> untuk keamanan -->
                    <form class="space-y-4" action="<?php echo e(route('employee.update', $employee->id)); ?>" method="POST" id="multipleValidation">
                        <?php echo csrf_field(); ?> <!-- CSRF Token untuk keamanan -->
                        <?php echo method_field('PUT'); ?> <!-- Method spoofing untuk Update -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="input-area">
                                <label for="name" class="form-label">Nama Karyawan</label>
                                <div class="relative">
                                    <input id="name" type="text" name="name" value="<?php echo e($employee->name); ?>" class="form-control" placeholder="Nama karyawan" required="required">
                                </div>
                            </div>
                            <div>
                                <label for="jabatan" class="form-label">jabatan</label>
                                <select name="jabatan" id="jabatan" class="select2 form-control w-full mt-2 py-2">
                                    <option value="">Pilih opsi</option>
                                    <option value="kasir" <?php if($employee->jabatan === 'kasir'): ?> selected <?php endif; ?>>Kasir</option>
                                    <option value="koki"<?php if($employee->jabatan === 'koki'): ?> selected <?php endif; ?>>Koki</option>
                                    <option value="pelayan" <?php if($employee->jabatan === 'pelayan'): ?> selected <?php endif; ?>>Pelayan</option>
                                </select>
                            </div>
                            <div>
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="select2 form-control w-full mt-2 py-2">
                                    <option value="">Pilih opsi</option>
                                    <option value="active" <?php if($employee->status === 'active'): ?> selected <?php endif; ?>>Active</option>
                                    <option value="inactive" <?php if($employee->status === 'inactive'): ?> selected <?php endif; ?>>Inactive</option>
                                </select>
                            </div>
                            <div class="input-area">
                                <label for="phone" class="form-label">No HP</label>
                                <div class="relative">
                                    <input id="phone" type="phone" name="phone" value="<?php echo e($employee->phone); ?>" class="form-control" placeholder="No HP" required="required">
                                </div>
                            </div>
                        </div>
                        <button class="btn flex justify-center btn-dark ml-auto" type="submit">Submit</button>
                    </form>
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
<?php /**PATH D:\Project\Dashboard\resources\views/employees/update.blade.php ENDPATH**/ ?>