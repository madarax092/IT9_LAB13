

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Posts</h1>
                <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary mb-3">Create New Post</a>

                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($post->title); ?></h5>
                            <p class="card-text"><?php echo e(Str::limit($post->body, 100)); ?></p>
                            <a href="<?php echo e(route('posts.show', $post)); ?>" class="btn btn-info">View</a>
                            <a href="<?php echo e(route('posts.edit', $post)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\IT9_LAB13\resources\views/posts/index.blade.php ENDPATH**/ ?>