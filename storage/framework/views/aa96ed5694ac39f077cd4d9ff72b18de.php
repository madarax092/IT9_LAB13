<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Blog App'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php echo $__env->yieldContent('styles'); ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Blog App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('posts.index')); ?>">Posts</a>
                        </li>
                        <li class="nav-item">
                            <form action="<?php echo e(url('/logout')); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn nav-link">Logout</button>
                            </form>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php if(auth()->guard()->check()): ?>
            <div class="alert alert-success mb-4">
                <h4 class="mb-0">Welcome, <?php echo e(auth()->user()->name); ?>!</h4>
                <small class="text-muted">Logged in as <?php echo e(auth()->user()->email); ?></small>
            </div>
        <?php endif; ?>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <footer class="bg-dark text-light mt-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <h5>Blog App</h5>
                    <p>Share your thoughts with the world.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>&copy; <?php echo e(date('Y')); ?> Blog App. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
<?php /**PATH C:\IT9_LAB13\resources\views/layouts/app.blade.php ENDPATH**/ ?>