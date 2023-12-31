<!-- BEGIN: Sidebar -->
<div class="sidebar-wrapper group w-0 hidden xl:w-[248px] xl:block">
    <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden">
    </div>
    <div class="logo-segment">

        <!-- Application Logo -->
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.application-logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('application-logo'); ?>
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

        <!-- Sidebar Type Button -->
        <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
            <iconify-icon class="sidebarDotIcon extend-icon text-slate-900 dark:text-slate-200" icon="fa-regular:dot-circle"></iconify-icon>
            <iconify-icon class="sidebarDotIcon collapsed-icon text-slate-900 dark:text-slate-200" icon="material-symbols:circle-outline"></iconify-icon>
        </div>
        <button class="sidebarCloseIcon text-2xl inline-block md:hidden">
            <iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line"></iconify-icon>
        </button>
    </div>
    <div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
      opacity-0"></div>
    <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] z-50" id="sidebar_menus">
        <ul class="sidebar-menu">
            <li class="sidebar-menu-title"><?php echo e(__('MENU')); ?></li>
            <li class="<?php echo e((\Request::route()->getName() == 'dashboards*') ? 'active' : ''); ?>">
                <a href="#" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
                        <span><?php echo e(__('Dashboard')); ?></span>
                    </span>
                    <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="<?php echo e(route('dashboards.analytic')); ?>" class="navItem <?php echo e((\Request::route()->getName() == 'dashboards.analytic') ? 'active' : ''); ?>"><?php echo e(__('Analytical Dashboard')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('dashboards.ecommerce')); ?>" class="navItem <?php echo e((\Request::route()->getName() == 'dashboards.ecommerce') ? 'active' : ''); ?>"><?php echo e(__('Ecommerce Dashboard')); ?>

                        </a>
                    </li>
                </ul>
            </li>
            <!-- Apps Area -->
            <li class="sidebar-menu-title"><?php echo e(__('APPS')); ?></li>
            <li>
                <a href="<?php echo e(route('chat')); ?>" class="navItem <?php echo e((\Request::route()->getName() == 'chat') ? 'active' : ''); ?>">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:chat"></iconify-icon>
                        <span><?php echo e(__('Chat')); ?></span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="<?php echo e(route('email')); ?>" class="navItem <?php echo e((\Request::route()->getName() == 'email') ? 'active' : ''); ?>">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:mail"></iconify-icon>
                        <span><?php echo e(__('Email')); ?></span>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('kanban')); ?>" class="navItem <?php echo e((\Request::route()->getName() == 'kanban') ? 'active' : ''); ?>">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:view-boards"></iconify-icon>
                        <span><?php echo e(__('Kanban')); ?></span>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('calender')); ?>" class="navItem <?php echo e((\Request::route()->getName() == 'calender') ? 'active' : ''); ?>">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:calendar"></iconify-icon>
                        <span><?php echo e(__('Calander')); ?></span>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('todo')); ?>" class="navItem <?php echo e((\Request::route()->getName() == 'todo') ? 'active' : ''); ?>">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:clipboard-check"></iconify-icon>
                        <span><?php echo e(__('Todo')); ?></span>
                    </span>
                </a>
            </li>
            <li class="<?php echo e((\Request::route()->getName() == 'project*') ? 'active' : ''); ?>">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:document"></iconify-icon>
                        <span><?php echo e(__('Projects')); ?></span>
                    </span>
                    <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="<?php echo e(route('project')); ?>" class="<?php echo e((\Request::route()->getName() == 'project') ? 'active' : ''); ?>"><?php echo e(__('Projects')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('project-details')); ?>" class="<?php echo e((\Request::route()->getName() == 'projectDetails') ? 'active' : ''); ?>"><?php echo e(__('Project Details')); ?></a>
                    </li>
                </ul>
            </li>
            <!-- Pages Area -->
            <li class="sidebar-menu-title"><?php echo e(__('PAGES')); ?></li>
            <!-- Utility -->
            <li class="<?php echo e((\Request::route()->getName() == 'utility*') ? 'active' : ''); ?>">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:view-boards"></iconify-icon>
                        <span><?php echo e(__('Utility')); ?></span>
                    </span>
                    <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="<?php echo e(route('utility.invoice')); ?>" class="<?php echo e((\Request::route()->getName() == 'utility.invoice') ? 'active' : ''); ?>"><?php echo e(__('Invoice')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('utility.pricing')); ?>" class="<?php echo e((\Request::route()->getName() == 'utility.pricing') ? 'active' : ''); ?>"><?php echo e(__('Pricing')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('utility.blog')); ?>" class="<?php echo e((\Request::route()->getName() == 'utility.blog') ? 'active' : ''); ?>"><?php echo e(__('Blog')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('utility.blank')); ?>" class="<?php echo e((\Request::route()->getName() == 'utility.blank') ? 'active' : ''); ?>"><?php echo e(__('Blank Page')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('utility.profile')); ?>" class="<?php echo e((\Request::route()->getName() == 'utility.profile') ? 'active' : ''); ?>"><?php echo e(__('Profile')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('utility.404')); ?>" class="<?php echo e((\Request::route()->getName() == 'utility.404') ? 'active' : ''); ?>"><?php echo e(__('404 Pages')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('utility.coming-soon')); ?>" class="<?php echo e((\Request::route()->getName() == 'utility.coming-soon') ? 'active' : ''); ?>"><?php echo e(__('Coming Soon')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('utility.under-maintenance')); ?>" class="<?php echo e((\Request::route()->getName() == 'utility-under-maintenance') ? 'active' : ''); ?>"><?php echo e(__('Under Maintenance')); ?></a>
                    </li>
                </ul>
            </li>
            <!-- Elements Area -->
            <li class="sidebar-menu-title"><?php echo e(__('ELEMENTS')); ?></li>
            <!-- Widgets -->
            <li class="<?php echo e((\Request::route()->getName() == 'widget*') ? 'active' : ''); ?>">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:view-grid-add"></iconify-icon>
                        <span><?php echo e(__('Widgets')); ?></span>
                    </span>
                    <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="<?php echo e(route('widget.basic')); ?>" class="<?php echo e((\Request::route()->getName() == 'widget.basic') ? 'active' : ''); ?>"><?php echo e(__('Basic')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('widget.statistic')); ?>" class="<?php echo e((\Request::route()->getName() == 'widget.statistic') ? 'active' : ''); ?>"><?php echo e(__('Statistics')); ?></a>
                    </li>
                </ul>
            </li>
            <!-- Components -->
            <li class="<?php echo e((\Request::route()->getName() == 'components*') ? 'active' : ''); ?>">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:collection"></iconify-icon>
                        <span><?php echo e(__('Components')); ?></span>
                    </span>
                    <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="<?php echo e(route('components.typography')); ?>" class="<?php echo e((\Request::route()->getName() == 'components.typography') ? 'active' : ''); ?>"><?php echo e(__('Typography')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('components.colors')); ?>" class="<?php echo e((\Request::route()->getName() == 'components.colors') ? 'active' : ''); ?>"><?php echo e(__('Colors')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('components.alert')); ?>" class="<?php echo e((\Request::route()->getName() == 'components.alert') ? 'active' : ''); ?>"><?php echo e(__('Alert')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('components.button')); ?>" class="<?php echo e((\Request::route()->getName() == 'components.button') ? 'active' : ''); ?>"><?php echo e(__('Button')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('components.card')); ?>" class="<?php echo e((\Request::route()->getName() == 'components.card') ? 'active' : ''); ?>"><?php echo e(__('Card')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('components.carousel')); ?>" class="<?php echo e((\Request::route()->getName() == 'components.carousel') ? 'active' : ''); ?>"><?php echo e(__('Carousel')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('components.dropdown')); ?>" class="<?php echo e((\Request::route()->getName() == 'components.dropdown') ? 'active' : ''); ?>"><?php echo e(__('Dropdown')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('components.image')); ?>" class="<?php echo e((\Request::route()->getName() == 'components.image') ? 'active' : ''); ?>"><?php echo e(__('Image')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('components.modal')); ?>" class="<?php echo e((\Request::route()->getName() == 'components.modal') ? 'active' : ''); ?>"><?php echo e(__('Modal')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('components.progress-bar')); ?>" class="<?php echo e((\Request::route()->getName() == 'components.progress-bar') ? 'active' : ''); ?>"><?php echo e(__('Progress bar')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('components.placeholder')); ?>" class="<?php echo e((\Request::route()->getName() == 'components.placeholder') ? 'active' : ''); ?>"><?php echo e(__('Placeholder')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('components.tab')); ?>" class="<?php echo e((\Request::route()->getName() == 'components.tab') ? 'active' : ''); ?>"><?php echo e(__('Tab & Accordion')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('components.badges')); ?>" class="<?php echo e((\Request::route()->getName() == 'components.badges') ? 'active' : ''); ?>"><?php echo e(__('Badges')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('components.pagination')); ?>" class="<?php echo e((\Request::route()->getName() == 'components.pagination') ? 'active' : ''); ?>">Pagination</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('components.video')); ?>" class="<?php echo e((\Request::route()->getName() == 'components.video') ? 'active' : ''); ?>"><?php echo e(__('Video')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('components.tooltip')); ?>" class="<?php echo e((\Request::route()->getName() == 'components.tooltip') ? 'active' : ''); ?>"><?php echo e(__('Tooltip & Popover')); ?></a>
                    </li>
                </ul>
            </li>
            <!-- Forms -->
            <li class="<?php echo e((\Request::route()->getName() == 'forms*') ? 'active' : ''); ?>">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:clipboard-list"></iconify-icon>
                        <span><?php echo e(__('Forms')); ?></span>
                    </span>
                    <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="<?php echo e(route('forms.input')); ?>" class="<?php echo e((\Request::route()->getName() == 'forms.input') ? 'active' : ''); ?>"><?php echo e(__('Input')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('forms.input-group')); ?>" class="<?php echo e((\Request::route()->getName() == 'forms.input-group') ? 'active' : ''); ?>"><?php echo e(__('Input group')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('forms.input-layout')); ?>" class="<?php echo e((\Request::route()->getName() == 'forms.input-layout') ? 'active' : ''); ?>"><?php echo e(__('Input layout')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('forms.input-validation')); ?>" class="<?php echo e((\Request::route()->getName() == 'forms.input-validation') ? 'active' : ''); ?>"><?php echo e(__('Form validation')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('forms.input-wizard')); ?>" class="<?php echo e((\Request::route()->getName() == 'forms.input-wizard') ? 'active' : ''); ?>"><?php echo e(__('Wizard')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('forms.input-mask')); ?>" class="<?php echo e((\Request::route()->getName() == 'forms.input-mask') ? 'active' : ''); ?>"><?php echo e(__('Input mask')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('forms.file-input')); ?>" class="<?php echo e((\Request::route()->getName() == 'forms.file-input') ? 'active' : ''); ?>"><?php echo e(__('File input')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('forms.repeater')); ?>" class="<?php echo e((\Request::route()->getName() == 'forms.repeater') ? 'active' : ''); ?>"><?php echo e(__('From repeater')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('forms.textarea')); ?>" class="<?php echo e((\Request::route()->getName() == 'forms.textarea') ? 'active' : ''); ?>"><?php echo e(__('Textarea')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('forms.checkbox')); ?>" class="<?php echo e((\Request::route()->getName() == 'forms.checkbox') ? 'active' : ''); ?>"><?php echo e(__('Checkbox')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('forms.radio')); ?>" class="<?php echo e((\Request::route()->getName() == 'forms.radio') ? 'active' : ''); ?>"><?php echo e(__('Radio button')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('forms.switch')); ?>" class="<?php echo e((\Request::route()->getName() == 'forms.switch') ? 'active' : ''); ?>"><?php echo e(__('Switch')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('forms.select')); ?>" class="<?php echo e((\Request::route()->getName() == 'forms.select') ? 'active' : ''); ?>"><?php echo e(__('Select')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('forms.date-time-picker')); ?>" class="<?php echo e((\Request::route()->getName() == 'forms.date-time-picker') ? 'active' : ''); ?>"><?php echo e(__('Date time picker')); ?></a>
                    </li>
                </ul>
            </li>
            <!-- Tables -->
            <li class="<?php echo e((\Request::route()->getName() == 'table*') ? 'active' : ''); ?>">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:table"></iconify-icon>
                        <span><?php echo e(__('Tables')); ?></span>
                    </span>
                    <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="<?php echo e(route('table.basic')); ?>" class="<?php echo e((\Request::route()->getName() == 'table.basic') ? 'active' : ''); ?>"><?php echo e(__('Basic Tables')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('table.advance')); ?>" class="<?php echo e((\Request::route()->getName() == 'table.advance') ? 'active' : ''); ?>"><?php echo e(__('Advanced Table')); ?></a>
                    </li>
                </ul>
            </li>
            <!-- Charts -->
            <li class="<?php echo e((\Request::route()->getName() == 'chart*') ? 'active' : ''); ?>">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:chart-bar"></iconify-icon>
                        <span><?php echo e(__('Chart')); ?></span>
                    </span>
                    <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="<?php echo e(route('chart.apex')); ?>" class="<?php echo e((\Request::route()->getName() == 'chart.apex') ? 'active' : ''); ?>"><?php echo e(__('Apex Chart')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('chart.index')); ?>" class="<?php echo e((\Request::route()->getName() == 'chart.index') ? 'active' : ''); ?>"><?php echo e(__('Chart js')); ?></a>
                    </li>
                </ul>
            </li>
            <!-- Map -->
            <li>
                <a href="<?php echo e(route('map')); ?>" class="navItem <?php echo e((\Request::route()->getName() == 'map') ? 'active' : ''); ?>">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:map"></iconify-icon>
                        <span><?php echo e(__('Map')); ?></span>
                    </span>
                </a>
            </li>
            <!-- Icons -->
            <li>
                <a href="<?php echo e(route('icon')); ?>" class="navItem <?php echo e((\Request::route()->getName() == 'icon') ? 'active' : ''); ?>">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:emoji-happy"></iconify-icon>
                        <span><?php echo e(__('Icons')); ?></span>
                    </span>
                </a>
            </li>
            <!-- Database -->
            <li>
                <a href="<?php echo e(route('database-backups.index')); ?>"
                   class="navItem <?php echo e((request()->is('database-backups*')) ? 'active' : ''); ?>">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="iconoir:database-backup"></iconify-icon>
                        <span><?php echo e(__('Database Backup')); ?></span>
                    </span>
                </a>
            </li>
            <!-- Settings -->
            <li>
                <a href="<?php echo e(route('general-settings.show')); ?>"
                   class="navItem <?php echo e((request()->is('general-settings*')) || (request()->is('users*')) || (request()->is('roles*')) || (request()->is('profiles*')) || (request()->is('permissions*')) ? 'active' : ''); ?>">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:settings-outline"></iconify-icon>
                        <span><?php echo e(__('Settings')); ?></span>
                    </span>
                </a>
            </li>
        </ul>
        <!-- Upgrade Your Business Plan Card Start -->
        <div class="bg-slate-900 mb-10 mt-24 p-4 relative text-center rounded-2xl text-white" id="sidebar_bottom_wizard">
            <img src="/images/svg/rabit.svg" alt="" class="mx-auto relative -mt-[73px]">
            <div class="max-w-[160px] mx-auto mt-6">
                <div class="widget-title font-Inter mb-1">Unlimited Access</div>
                <div class="text-xs font-light font-Inter">
                    Upgrade your system to business plan
                </div>
            </div>
            <div class="mt-6">
                <button class="bg-white hover:bg-opacity-80 text-slate-900 text-sm font-Inter rounded-md w-full block py-2 font-medium">
                    Upgrade
                </button>
            </div>
        </div>
        <!-- Upgrade Your Business Plan Card Start -->
    </div>
</div>
<!-- End: Sidebar -->
<?php /**PATH D:\laragon\www\dashcode-laravel\resources\views/components/sidebar-menu.blade.php ENDPATH**/ ?>