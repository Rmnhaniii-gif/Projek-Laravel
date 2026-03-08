

<?php $__env->startSection('title', 'Library App - Home'); ?>

<?php $__env->startSection('content'); ?>




    <div class="flex-1 flex flex-col overflow-hidden">
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 px-4 py-4 md:px-8 md:py-8">
                <div class="flex flex-col gap-1">
                    <h1 class="font-semibold md:text-lg text-gray-800">Publisher</h1>
                    <div class="flex items-center gap-1">
                        <p class="text-xs text-gray-400 md:text-sm">Admin</p>
                        <p class="text-xs text-gray-400 md:text-sm">/</p>
                        <p class="text-xs text-gray-400 md:text-sm">Publisher</p>
                    </div>
                </div>


            

    
    
<?php if(session('success')): ?>
    <div id="alertBox" role="alert" class="bg-green-600 mt-4 rounded-md px-4 py-3 flex items-center">
        <i class="fas fa-check-circle text-white mr-2"></i>
        <span class="text-white font-medium text-sm"><?php echo e(session('success')); ?></span>
    </div>
<?php elseif(session('error')): ?>
    <div id="alertBox" role="alert" class="bg-red-600 mt-4 rounded-md px-4 py-3 flex items-center">
        <i class="fas fa-times-circle text-white mr-2"></i>
        <span class="text-white font-medium text-sm"><?php echo e(session('error')); ?></span>
    </div>
<?php endif; ?>



        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.author.publisher', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-15583359-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\projekHani\resources\views/pages/admin/publisher.blade.php ENDPATH**/ ?>