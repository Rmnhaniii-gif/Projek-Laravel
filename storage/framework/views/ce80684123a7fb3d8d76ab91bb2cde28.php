        <!-- Main content -->
    
<?php if (isset($component)) { $__componentOriginalf818c67b6eb448edb731318e48f2e69b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf818c67b6eb448edb731318e48f2e69b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf818c67b6eb448edb731318e48f2e69b)): ?>
<?php $attributes = $__attributesOriginalf818c67b6eb448edb731318e48f2e69b; ?>
<?php unset($__attributesOriginalf818c67b6eb448edb731318e48f2e69b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf818c67b6eb448edb731318e48f2e69b)): ?>
<?php $component = $__componentOriginalf818c67b6eb448edb731318e48f2e69b; ?>
<?php unset($__componentOriginalf818c67b6eb448edb731318e48f2e69b); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalbebe114f3ccde4b38d7462a3136be045 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbebe114f3ccde4b38d7462a3136be045 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbebe114f3ccde4b38d7462a3136be045)): ?>
<?php $attributes = $__attributesOriginalbebe114f3ccde4b38d7462a3136be045; ?>
<?php unset($__attributesOriginalbebe114f3ccde4b38d7462a3136be045); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbebe114f3ccde4b38d7462a3136be045)): ?>
<?php $component = $__componentOriginalbebe114f3ccde4b38d7462a3136be045; ?>
<?php unset($__componentOriginalbebe114f3ccde4b38d7462a3136be045); ?>
<?php endif; ?>



    <div class="flex-1 flex flex-col overflow-hidden">
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 px-4 py-4 md:px-8 md:py-8">
                <div class="flex flex-col gap-1">
                    <h1 class="font-semibold md:text-lg text-gray-800">Dashboard</h1>
                    <div class="flex items-center gap-1">
                        <p class="text-xs text-gray-400 md:text-sm">Admin</p>
                        <p class="text-xs text-gray-400 md:text-sm">/</p>
                        <p class="text-xs text-gray-400 md:text-sm">Dashboard</p>

                    </div>
                </div>
  

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">

  
    <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
        <p class="text-sm text-gray-500">Total Penulis</p>
        <h2 class="text-3xl font-semibold text-gray-800"><?php echo e($totalAuthors); ?></h2>
    </div>

    
    <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
        <p class="text-sm text-gray-500">Total Buku</p>
        <h2 class="text-3xl font-semibold text-gray-800"><?php echo e($totalBooks); ?></h2>
    </div>

  

    
    <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
        <p class="text-sm text-gray-500">Total Pengguna</p>
        <h2 class="text-3xl font-semibold text-gray-800"><?php echo e($totalUsers); ?></h2>
    </div>
    <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
        <p class="text-sm text-gray-500">Total Publisher</p>
        <h2 class="text-3xl font-semibold text-gray-800"><?php echo e($totalPublisher); ?></h2>
    </div>
    <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
        <p class="text-sm text-gray-500">Total Category</p>
        <h2 class="text-3xl font-semibold text-gray-800"><?php echo e($totalCategory); ?></h2>
    </div>
    <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
        <p class="text-sm text-gray-500">Total Shelf</p>
        <h2 class="text-3xl font-semibold text-gray-800"><?php echo e($totalShelf); ?></h2>
    </div>

    
    
  
    
</div>


<?php /**PATH D:\laragon\www\projekHani\resources\views/pages/admin/dashboard.blade.php ENDPATH**/ ?>