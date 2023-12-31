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

        <div class="grid xl:grid-cols-2 grid-cols-1 gap-6">

            <!-- BEGIN: File Input Basic -->
            <div class="card rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
              <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                  <div class="flex-1">
                    <div class="card-title text-slate-900 dark:text-white">File Input Basic</div>
                  </div>
                </header>
                <div class="card-text h-full space-y-6">
                  <div class="input-area">
                    <div class="filegroup">
                      <label>
                        <input type="file" class=" w-full hidden" name="basic">
                        <span class="w-full h-[40px] file-control flex items-center custom-class">
                          <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                            <span class="text-slate-400">Choose a file or drop it here...</span>
                          </span>
                          <span class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                        </span>
                      </label>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <!-- END: File Input Basic -->

            <!-- BEGIN: Multiple Files -->
            <div class="card rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
              <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                  <div class="flex-1">
                    <div class="card-title text-slate-900 dark:text-white">Multiple Files</div>
                  </div>
                </header>
                <div class="card-text h-full space-y-6">
                  <div class="input-area">
                    <div class="filegroup">
                      <label>
                        <input type="file" class=" w-full hidden" name="basic" multiple="multiple">
                        <span class="w-full h-[40px] file-control flex items-center custom-class">
                          <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                            <span id="placeholder" class="text-slate-400">Choose a file or drop it here...</span>
                          </span>
                          <span class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                        </span>
                      </label>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <!-- END: Multiple Files -->

            <!-- BEGIN: Files With Preview -->
            <div class="card rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
              <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                  <div class="flex-1">
                    <div class="card-title text-slate-900 dark:text-white">Multiple Files</div>
                  </div>
                </header>
                <div class="card-text h-full space-y-6">
                  <div class="input-area">
                    <div class="filePreview">
                      <label>
                        <input type="file" class=" w-full hidden" name="basic">
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
            </div>
            <!-- END: Files With Preview -->

            <!-- BEGIN: Multiple Files With Preview -->
            <div class="card rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
              <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                  <div class="flex-1">
                    <div class="card-title text-slate-900 dark:text-white">Multiple Files With Preview</div>
                  </div>
                </header>
                <div class="card-text h-full space-y-6">
                  <div class="input-area">
                    <div class="multiFilePreview">
                      <label>
                        <input type="file" class=" w-full hidden" name="basic" multiple="multiple" accept=".jpg, .jpeg, .png">
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
            </div>
            <!-- END: Multiple Files With Preview -->

            <!-- BEGIN: File Dropzone -->
            <div class="card rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base xl:col-span-2">
              <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                  <div class="flex-1">
                    <div class="card-title text-slate-900 dark:text-white">File Dropzone</div>
                  </div>
                </header>
                <div class="card-text h-full space-y-6">
                  <div class="w-full text-center border-dashed border border-secondary-500 rounded-md py-[52px] flex justify-center items-center">
                    <form action="/" role="presentation" tabindex="0" class="dropzone border-none dark:bg-slate-800" id="myUploader">
                      <div class="dz-default dz-message">
                        <button class="dz-button" type="button">
                          <img src="images/svg/upload.svg" alt="" class="mx-auto mb-4">
                          <p class="text-sm text-slate-500 dark:text-slate-300">Drop files here or click to upload.</p>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- END: File Dropzone -->

            <!-- BEGIN: Control Sizing -->
            <div class="card rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
              <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                  <div class="flex-1">
                    <div class="card-title text-slate-900 dark:text-white">Control Sizing</div>
                  </div>
                </header>
                <div class="card-text h-full space-y-6">
                  <div class="filegroup">
                    <label>
                      <input type="file" class=" w-full hidden" name="basic" multiple="multiple">
                      <div class="w-full h-[50px] file-control flex items-center custom-class">
                        <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                          <span id="placeholder" class="text-slate-400">Large</span>
                        </span>
                        <span class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                      </div>
                    </label>
                  </div>
                  <div class="filegroup">
                    <label>
                      <input type="file" class=" w-full hidden" name="basic" multiple="multiple">
                      <span class="w-full h-[40px] file-control flex items-center custom-class">
                        <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                          <span id="placeholder" class="text-slate-400">Default</span>
                        </span>
                        <span class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                      </span>
                    </label>
                  </div>
                  <div class="filegroup">
                    <label>
                      <input type="file" class=" w-full hidden" name="basic" multiple="multiple">
                      <div class="w-full h-[30px] file-control flex items-center custom-class">
                        <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                          <span id="placeholder" class="text-slate-400">Small</span>
                        </span>
                        <span class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <!-- END: Control Sizing -->

            <!-- BEGIN: Multiple Files -->
            <div class="card rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
              <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                  <div class="flex-1">
                    <div class="card-title text-slate-900 dark:text-white">Multiple Files</div>
                  </div>
                </header>
                <div class="card-text h-full space-y-6">
                  <div class="input-area">
                    <div class="filegroup">
                      <label>
                        <input type="file" class=" w-full hidden" name="basic" multiple="multiple">
                        <span class="w-full h-[40px] file-control flex items-center custom-class">
                          <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                            <span id="placeholder" class="text-slate-400">Choose a file or drop it here...</span>
                          </span>
                          <span class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                        </span>
                      </label>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <!-- END: Multiple Files -->
        </div>
    </div>

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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH D:\Project\Dashboard\resources\views/elements/forms/file-input.blade.php ENDPATH**/ ?>