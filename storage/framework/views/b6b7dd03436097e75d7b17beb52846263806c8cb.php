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

        <div class="card">
            <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                    <div class="flex-1">
                        <div class="card-title text-slate-900 dark:text-white">Input Mask</div>
                    </div>
                </header>
                <div class="card-text h-full ">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="input-area">
                            <label for="creditCard" class="form-label">Credit Card</label>
                            <input id="creditCard" type="text" class="form-control" placeholder="0000 0000 0000 0000"> </div>
                        <div class="input-area">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input id="phone" type="text" class="form-control" placeholder="Phone Number"> </div>
                        <div class="input-area">
                            <label for="date" class="form-label">Date</label>
                            <input id="date" type="text" class="form-control" placeholder="YYYY/MM/DD"> </div>
                        <div class="input-area">
                            <label for="time" class="form-label">Time</label>
                            <input id="time" type="text" class="form-control" placeholder="HH:MM:SS"> </div>
                        <div class="input-area">
                            <label for="numeralFormatting" class="form-label">Numeral Formatting</label>
                            <input id="numeralFormatting" type="text" class="form-control" placeholder="10,000"> </div>
                        <div class="input-area">
                            <label for="blocks" class="form-label">Blocks</label>
                            <input id="blocks" type="text" class="form-control" placeholder="6543 454 484"> </div>
                        <div class="input-area">
                            <label for="delimiters" class="form-label">Delimiters</label>
                            <input id="delimiters" type="text" class="form-control" placeholder="615.645.658"> </div>
                        <div class="input-area">
                            <label for="customdelimiters" class="form-label">Custom Delimiters</label>
                            <input id="customdelimiters" type="text" class="form-control" placeholder="Delimiter: ['.', '.', '-']"> </div>
                        <div class="input-area">
                            <label for="prefix" class="form-label">Prefix</label>
                            <input id="prefix" type="text" class="form-control" placeholder="+88 5485487478"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->startPush('scripts'); ?>
        <script type="module">
            // Credit Card
            new Cleave('#creditCard', {
                creditCard: true
            });
            // Phone
            new Cleave('#phone', {
                prefix: '+88 ',
                delimiter: '-',
                blocks: [8, 7],
                numericOnly: true
            });
            // Date
            new Cleave('#date', {
                date: true,
                delimiter: '/',
                datePattern: ['Y', 'm', 'd']
            });
            // Time
            new Cleave('#time', {
                time: true,
                timePattern: ['h', 'm', 's']
            });
            // Numeral Formatting
            new Cleave('#numeralFormatting', {
                numeral: true,
                numeralThousandsGroupStyle: 'thousand'
            });
            // Blocks
            new Cleave('#blocks', {
                blocks: [4, 3, 3, 4],
                uppercase: true
            });
            // Delimiters
            new Cleave('#delimiters', {
                delimiter: '.',
                blocks: [3, 3, 3],
                uppercase: true
            });
            // Custom Delimiters
            new Cleave('#customdelimiters', {
                delimiters: ['.', '/', '-'],
                blocks: [3, 3, 3, 2],
                uppercase: true
            });
            // Prefix
            new Cleave('#prefix', {
                prefix: '+88 ',
                delimiter: '-',
                blocks: [6, 4, 4, 4],
                uppercase: true
            });
        </script>
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH D:\Project\Dashboard\resources\views/elements/forms/input-mask.blade.php ENDPATH**/ ?>