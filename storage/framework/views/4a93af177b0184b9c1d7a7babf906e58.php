<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Welcome</h1>
            <div class="space-y-4">
                <a href="<?php echo e(route('login')); ?>"
                    class="w-full block text-center bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">
                    Login
                </a>
                <a href="<?php echo e(route('register')); ?>"
                    class="w-full block text-center border border-gray-300 hover:bg-gray-50 text-gray-700 font-semibold py-2 px-4 rounded-md">
                    Register
                </a>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\IT9_LAB13\resources\views/welcome.blade.php ENDPATH**/ ?>