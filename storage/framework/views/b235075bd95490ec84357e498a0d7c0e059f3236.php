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
                    <form class="space-y-4" action="<?php echo e(route('product.store')); ?>" method="POST" id="multipleValidation" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?> <!-- CSRF Token untuk keamanan -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="input-area">
                                <label for="name" class="form-label">Nama Produk</label>
                                <div class="relative">
                                    <input id="name" type="text" name="name" class="form-control" placeholder="Nama Produk" required="required">
                                </div>
                            </div>
                            <div>
                                <label for="suhu" class="form-label">Suhu</label>
                                <select name="suhu" id="suhu" class="select2 form-control w-full mt-2 py-2">
                                    <option value="">Pilih opsi</option>
                                    <option value="hot">Panas</option>
                                    <option value="cold">Dingin</option>
                                </select>
                            </div>
                            <div>
                                <label for="category" class="form-label">Kategory</label>
                                <select name="category" id="category" class="select2 form-control w-full mt-2 py-2">
                                    <option value="">Pilih opsi</option>
                                    <option value="coffee">Kopi</option>
                                    <option value="tea">Teh</option>
                                    <option value="juice">Jus</option>
                                    <option value="soft drink">Soft drink</option>
                                </select>
                            </div>
                            <div class="input-area">
                                <label for="price" class="form-label">Harga</label>
                                <div class="relative">
                                    <input id="price" type="text" name="price" class="form-control" placeholder="Harga" required="required">
                                </div>
                            </div>
                            <div class="card-text h-full space-y-6">
                                <div class="input-area">
                                    <div class="filePreview">
                                        <label class="form-label"> Foto
                                            <input type="file" class=" w-full hidden" name="foto">
                                            <span class="w-full h-[40px] file-control flex items-center custom-class">
                                            <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                                                <span id="placeholder" class="text-slate-400">Choose a file or drop it here...</span>
                                            </span>
                                            <span class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                                            </span>
                                        </label>
                                        <div id="file-preview"></div>
                                    </div>
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

<?php $__env->startPush('scripts'); ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/plugins/dropzone.min.js']); ?>
        <script type="module">
            Dropzone.autoDiscover = false;
            $("#myUploader").dropzone({
                url: "/",
                dictDefaultMessage: "",
                addRemoveLinks: true,
            });
        </script>
    <?php $__env->stopPush(); ?>

<?php /**PATH D:\Project\Dashboard\resources\views/products/tambah.blade.php ENDPATH**/ ?>