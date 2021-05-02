<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Movie App</title>

    <!-- Styles -->
    <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans" style="background-image:url('/images/body-bg.jpg')">
<div class="flex flex-col">
    <?php if(Route::has('login')): ?>
        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/movies')); ?>" class="no-underline hover:underline text-sm font-normal text-gray-200 uppercase"><?php echo e(__('Home')); ?></a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="no-underline hover:underline text-sm font-normal text-gray-200 uppercase"><?php echo e(__('Login')); ?></a>
                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>" class="no-underline hover:underline text-sm font-normal text-gray-200 uppercase"><?php echo e(__('Register')); ?></a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col justify-around h-full">
            hello
        </div>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel-movie-examples\resources\views/welcome.blade.php ENDPATH**/ ?>