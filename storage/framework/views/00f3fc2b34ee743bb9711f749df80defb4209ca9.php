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

        <div class="space-y-5">
            <div class="card">
                <header class=" card-header">
                    <h4 class="card-title">Area Chart
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div id="areaChart"></div>
                </div>
            </div>
            <!-- end single card -->
            <div class="card">
                <header class=" card-header">
                    <h4 class="card-title">Area Spaline
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div id="areaSpaline"></div>
                </div>
            </div>
            <!-- end single card -->
            <div class="card">
                <header class=" card-header">
                    <h4 class="card-title">Basic Bar Chart
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div id="basicBarChart"></div>
                </div>
            </div>
            <!-- end single card -->
            <div class="card">
                <header class=" card-header">
                    <h4 class="card-title">Column Chart
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div id="columnChart"></div>
                </div>
            </div>
            <!-- end single card -->
            <div class="card">
                <header class=" card-header">
                    <h4 class="card-title">3D Bubble
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div id="bubbleChart"></div>
                </div>
            </div>
            <!-- end single card -->
            <div class="card">
                <header class=" card-header">
                    <h4 class="card-title">Scatter Chart
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div id="scatterChart"></div>
                </div>
            </div>
            <!-- end single card -->
            <div class="card">
                <header class=" card-header">
                    <h4 class="card-title">Candlestick Chart
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div id="candlestickChart"></div>
                </div>
            </div>
            <!-- end single card -->
            <div class="card">
                <header class=" card-header">
                    <h4 class="card-title">Stepline Chart
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div id="steplineChart"></div>
                </div>
            </div>
            <!-- end single card -->
            <div class="card">
                <header class=" card-header">
                    <h4 class="card-title">Stacked Columns
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div id="stackedColumns"></div>
                </div>
            </div>
            <!-- end single card -->
            <div class="card">
                <header class=" card-header">
                    <h4 class="card-title">Pie & Donut Chart
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div class="grid xl:grid-cols-2 grid-cols-1 gap-5">
                        <div>
                            <div id="pieChart"></div>
                        </div>
                        <div>
                            <div id="donutChart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end single card -->
            <div class="card">
                <header class=" card-header">
                    <h4 class="card-title">Mixed Chart
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div id="mixedChart"></div>
                </div>
            </div>
            <!-- end single card -->
            <div class="card">
                <header class=" card-header">
                    <h4 class="card-title">Radar Chart
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div id="radarChart"></div>
                </div>
            </div>
            <!-- end single card -->
            <div class="card">
                <header class=" card-header">
                    <h4 class="card-title">Multiple Radialbars
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div id="radialbars"></div>
                </div>
            </div>
            <!-- end single card -->
        </div>
    </div>

    <?php $__env->startPush('scripts'); ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/custom/chart-active.js']); ?>
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH D:\Project\dashcode-laravel-full-source-code\resources\views/elements/chart/apexchart.blade.php ENDPATH**/ ?>