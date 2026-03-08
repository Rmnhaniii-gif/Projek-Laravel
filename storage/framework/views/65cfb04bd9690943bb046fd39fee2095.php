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

<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Daftar Semua Peminjaman</h2>
 
    <?php if(session('success')): ?>
        <div class="bg-green-100 text-green-800 px-4 py-3 rounded-md mb-6">
            <?php echo e(session('success')); ?>

        </div>
        
    <?php endif; ?>
    


    <div class="overflow-x-auto shadow-md rounded-lg">
        <table class="w-full border-collapse bg-white">
            <thead>
                <tr class="bg-gray-200 text-gray-700 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left border-b border-gray-300">Nama Siswa</th>
                    <th class="py-3 px-6 text-left border-b border-gray-300">Buku yang Dipinjam</th>
                    <th class="py-3 px-6 text-left border-b border-gray-300">Status</th>
                    <th class="py-3 px-6 text-left border-b border-gray-300">Tanggal</th>
                    <th class="py-3 px-6 text-left border-b border-gray-300">Fine</th>
                    <th class="py-3 px-6 text-left border-b border-gray-300">Notes</th>
                    <th class="py-3 px-6 text-left border-b border-gray-300">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $borrowings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $borrowing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="hover:bg-gray-50 border-b border-gray-200">
                    <td class="py-4 px-6 border-r border-gray-200"><?php echo e($borrowing->user->firstname); ?> <?php echo e($borrowing->user->lastname); ?></td>
                    <td class="py-4 px-6 border-r border-gray-200">
                        <ul class="list-disc list-inside">
                            <?php $__currentLoopData = $borrowing->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($detail->book->book_name ?? '-'); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </td>
                    <td class="py-4 px-6 border-r border-gray-200">
    <span class="<?php echo e($borrowing->borrowing_isreturned ? 'text-green-600' : 'text-red-600'); ?> font-semibold">
        <?php echo e($borrowing->borrowing_isreturned ? 'Dikembalikan' : 'Belum Dikembalikan'); ?>

    </span>
</td>

                    <td class="py-4 px-6 border-r border-gray-200"><?php echo e($borrowing->created_at->format('d M Y')); ?></td>
                    <td class="py-4 px-6 border-r border-gray-200">
                        <form method="POST" action="<?php echo e(route('admin.borrowings.update', $borrowing->borrowing_id)); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="number" step="0.01" name="borrowing_fine" value="<?php echo e($borrowing->borrowing_fine); ?>" class="w-20 border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </td>
                    <td class="py-4 px-6 border-r border-gray-200">
                            <textarea name="borrowing_notes" class="w-60 h-16 border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500"><?php echo e($borrowing->borrowing_notes); ?></textarea>
                    </td>
                    <td class="py-4 px-6">
                            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Simpan</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" class="py-6 text-center text-gray-500">Tidak ada data peminjaman</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div><?php /**PATH D:\laragon\www\projekHani\resources\views/pages/admin/borrowing.blade.php ENDPATH**/ ?>