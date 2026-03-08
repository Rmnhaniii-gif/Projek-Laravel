   
   <div>
   
   <!-- CREATE BOOK FORM -->


        <div class="bg-white shadow-md rounded-lg p-6 mt-6">
            <h2 class="text-base font-semibold mb-4 text-gray-700">Create Book</h2>
           
            <form action="<?php echo e(route('book.store')); ?>" method="POST" enctype="multipart/form-data">

                <?php echo csrf_field(); ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <input type="text" name="book_name" placeholder="Book Name" class="px-3 py-2 border rounded w-full" />
                    <input type="text" name="book_isbn" placeholder="ISBN" class="px-3 py-2 border rounded w-full" />
                   <input type="file" name="book_img" accept="image/*" class="px-3 py-2 border rounded w-full" />
                    <input type="text" name="book_description" placeholder="Description" class="px-3 py-2 border rounded w-full" />
                    <input type="number" name="book_stock" placeholder="Stock" class="px-3 py-2 border rounded w-full" />

                    <select name="book_author_id" class="px-3 py-2 border rounded w-full">
                        <option value="">-- Select Author --</option>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($author->author_id); ?>"><?php echo e($author->author_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>

                    <select name="book_category_id" class="px-3 py-2 border rounded w-full">
                        <option value="">-- Select Category --</option>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->category_id); ?>"><?php echo e($category->category_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>

                    <select name="book_publisher_id" class="px-3 py-2 border rounded w-full">
                        <option value="">-- Select Publisher --</option>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publisher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($publisher->publisher_id); ?>"><?php echo e($publisher->publisher_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>

                    <select name="book_shelf_id" class="px-3 py-2 border rounded w-full">
                        <option value="">-- Select Shelf --</option>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $shelves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shelf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($shelf->shelf_id); ?>"><?php echo e($shelf->shelf_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>
                </div>

                <div class="flex justify-end mt-6">
                    <button type="submit" class="bg-gray-800 text-white font-semibold py-2 px-6 rounded hover:bg-gray-700 transition">
                        Create Book
                    </button>
                </div>
            </form>
        </div>

        <!-- BOOK TABLE -->
        <div class="bg-white shadow-md rounded-lg p-6 mt-10">
            <h2 class="text-base font-semibold mb-4 text-gray-700">📖 Book List</h2>
<input
    type="search"
    placeholder="Search book"
    wire:model.live.debounce.250ms="bookName"
    class="w-1/2 md:w-1/3 px-3 py-1 text-sm border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition"
/>
<br><br>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 text-sm text-left">
                    <thead class="bg-gray-50">
                        <tr class="text-gray-700 font-semibold text-xs uppercase tracking-wider">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">ISBN</th>
                            <th class="px-4 py-3">Stock</th>
                            <th class="px-4 py-3">Description</th>
                            <th class="px-4 py-3">Author</th>
                            <th class="px-4 py-3">Category</th>
                            <th class="px-4 py-3">Publisher</th>
                            <th class="px-4 py-3">Shelf</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="hover:bg-gray-50 cursor-pointer" onclick="openModal('bookModal-<?php echo e($book->book_id); ?>')">
                            <td class="px-4 py-3"><?php echo e($loop->iteration); ?></td>
                            <td class="px-4 py-3"><?php echo e($book->book_name); ?></td>
                            <td class="px-4 py-3"><?php echo e($book->book_isbn); ?></td>
                            <td class="px-4 py-3"><?php echo e($book->book_stock); ?></td>
                            <td class="px-4 py-3"><?php echo e($book->book_description); ?></td>
                            <td class="px-4 py-3"><?php echo e($book->author->author_name ?? '-'); ?></td>
                            <td class="px-4 py-3"><?php echo e($book->category->category_name ?? '-'); ?></td>
                            <td class="px-4 py-3"><?php echo e($book->publisher->publisher_name ?? '-'); ?></td>
                            <td class="px-4 py-3"><?php echo e($book->shelf->shelf_name ?? '-'); ?></td>
                        </tr>

                        <!-- MODAL EDIT BOOK -->
                        <dialog id="bookModal-<?php echo e($book->book_id); ?>" class="modal z-50">
                            <div class="modal-box bg-white rounded-lg shadow-lg w-11/12 max-w-xl fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-4 sm:p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="font-semibold text-base sm:text-lg text-gray-800">✏️ Update Book</h3>
                                    <form method="dialog">
                                        <button type="submit" class="text-gray-500 hover:text-gray-700 text-lg sm:text-xl">&times;</button>
                                    </form>
                                </div>

                               <form id="updateForm-<?php echo e($book->book_id); ?>" method="POST" action="<?php echo e(route('book.update', $book->book_id)); ?>" enctype="multipart/form-data" class="space-y-4">

                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PATCH'); ?>

                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1">Book Name</label>
                                            <input type="text" name="book_name" value="<?php echo e($book->book_name); ?>" class="px-2 sm:px-3 py-1 sm:py-2 border border-gray-300 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm sm:text-base" />
                                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['book_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-xs sm:text-sm text-red-600 mt-1"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                        <div>
                                            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1">ISBN</label>
                                            <input type="text" name="book_isbn" value="<?php echo e($book->book_isbn); ?>" class="px-2 sm:px-3 py-1 sm:py-2 border border-gray-300 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm sm:text-base" />
                                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['book_isbn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-xs sm:text-sm text-red-600 mt-1"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                        <div>
                                            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1">Image URL</label>
                                            <input type="file" name="book_img" accept="image/*" class="px-2 sm:px-3 py-1 sm:py-2 border border-gray-300 rounded w-full" />
    <!--[if BLOCK]><![endif]--><?php if($book->book_img): ?>
        <img src="<?php echo e(asset('storage/'.$book->book_img)); ?>" alt="Book Image" class="mt-2 w-20">
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['book_img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-xs sm:text-sm text-red-600 mt-1"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                        <div>
                                            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1">Description</label>
                                            <input type="text" name="book_description" value="<?php echo e($book->book_description); ?>" class="px-2 sm:px-3 py-1 sm:py-2 border border-gray-300 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm sm:text-base" />
                                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['book_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-xs sm:text-sm text-red-600 mt-1"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                        <div>
                                            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1">Stock</label>
                                            <input type="number" name="book_stock" value="<?php echo e($book->book_stock); ?>" class="px-2 sm:px-3 py-1 sm:py-2 border border-gray-300 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm sm:text-base" />
                                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['book_stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-xs sm:text-sm text-red-600 mt-1"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                        <div>
                                            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1">Author</label>
                                            <select name="book_author_id" class="px-2 sm:px-3 py-1 sm:py-2 border border-gray-300 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm sm:text-base">
                                                <option value="">-- Select Author --</option>
                                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($author->author_id); ?>" <?php if($book->book_author_id == $author->author_id): echo 'selected'; endif; ?>>
                                                        <?php echo e($author->author_name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                            </select>
                                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['book_author_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-xs sm:text-sm text-red-600 mt-1"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                        <div>
                                            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1">Category</label>
                                            <select name="book_category_id" class="px-2 sm:px-3 py-1 sm:py-2 border border-gray-300 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm sm:text-base">
                                                <option value="">-- Select Category --</option>
                                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($category->category_id); ?>" <?php if($book->book_category_id == $category->category_id): echo 'selected'; endif; ?>>
                                                        <?php echo e($category->category_name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                            </select>
                                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['book_category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-xs sm:text-sm text-red-600 mt-1"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                        <div>
                                            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1">Publisher</label>
                                            <select name="book_publisher_id" class="px-2 sm:px-3 py-1 sm:py-2 border border-gray-300 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm sm:text-base">
                                                <option value="">-- Select Publisher --</option>
                                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publisher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($publisher->publisher_id); ?>" <?php if($book->book_publisher_id == $publisher->publisher_id): echo 'selected'; endif; ?>>
                                                        <?php echo e($publisher->publisher_name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                            </select>
                                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['book_publisher_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-xs sm:text-sm text-red-600 mt-1"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                        <div>
                                            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1">Shelf</label>
                                            <select name="book_shelf_id" class="px-2 sm:px-3 py-1 sm:py-2 border border-gray-300 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm sm:text-base">
                                                <option value="">-- Select Shelf --</option>
                                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $shelves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shelf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($shelf->shelf_id); ?>" <?php if($book->book_shelf_id == $shelf->shelf_id): echo 'selected'; endif; ?>>
                                                        <?php echo e($shelf->shelf_name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                            </select>
                                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['book_shelf_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-xs sm:text-sm text-red-600 mt-1"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                    </div>
                                </form>

                                <div class="flex items-center justify-end gap-2 mt-4">
                                    <button type="submit" form="updateForm-<?php echo e($book->book_id); ?>" class="px-2 sm:px-3 py-1 sm:py-2 bg-gray-800 rounded text-sm text-white font-medium transition-all duration-300">Update</button>
                                    <form id="deleteForm-<?php echo e($book->book_id); ?>" action="<?php echo e(route('book.destroy', $book->book_id)); ?>" method="POST" class="inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="px-2 sm:px-3 py-1 sm:py-2 bg-red-600 rounded text-sm text-white font-medium transition-all duration-300">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </dialog>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tbody>
                </table>

                <div class="mt-6">
                    <?php echo e($books->links()); ?>

                </div>
            </div>
        </div>
    </main>
</div>

</div><?php /**PATH D:\laragon\www\projekHani\resources\views/livewire/admin/author/book.blade.php ENDPATH**/ ?>