<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <p>Email:</p>
        <input name="email" type="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required>
        <p>Password:</p>
        <input name="password" type="password" placeholder="Password" required required>

        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <button type="submit">Login</button>

    </form>

</body>

</html>
<?php /**PATH C:\IT9_LAB13\resources\views/login.blade.php ENDPATH**/ ?>