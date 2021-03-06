
<?php $__env->startSection('content'); ?>
    <table class="table table-dark">
        <thead>
        <tr>
            <th>Mã SP</th>   
            <th>Tên SP</th>   
            <th>Ảnh</th>
            <th>Giá</th>
            <th>
                <a href="<?php echo e(getClientUrl('add-product')); ?>" class="btn btn-sm btn-danger">Thêm Mới</a>
            </th>  
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($item->id); ?></td>
            <td><?php echo e($item->name); ?></td>
            <td>
                <img src="<?php echo e(getClientUrl($item->image)); ?>" width="100">
            </td>
            <td><?php echo e($item->price); ?></td>
            <td>
                <a href="<?php echo e(getClientUrl('delete-product', ['id'=>$item->id])); ?>" class="btn btn-sm btn-danger">Xóa</a>
                <a href="<?php echo e(getClientUrl('edit-product', ['id'=>$item->id])); ?>" class="btn btn-sm btn-danger">Sửa</a>
           </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2-pt15112\mvc\app\views/home/trang-chu.blade.php ENDPATH**/ ?>