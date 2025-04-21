

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo e($post->title); ?></h1>
                <div class="mb-3">
                    <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-secondary">Back to Posts</a>
                    <a href="<?php echo e(route('posts.edit', $post)); ?>" class="btn btn-warning">Edit</a>
                    <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>

                <div class="card">
                    <div class="card-body">
                        <?php echo e($post->body); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\IT9_LAB13\resources\views/posts/show.blade.php ENDPATH**/ ?>