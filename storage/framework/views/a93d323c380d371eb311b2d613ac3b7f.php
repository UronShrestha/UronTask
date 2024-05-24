<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'figtree', sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .content {
            text-align: center;
        }
       
        
        .links {
            margin-top: 1rem;
            
        }
        .link {
            font-size: 1.5rem; 
            color: #f3f5f7; 
           
            display: block;
            margin: 1rem;
            padding: 1rem;
            border-radius: 50px;
            background-color: #0f4e81;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
           
            <div class="links">
                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/dashboard')); ?>" class="link">Dashboard</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="link">Log in</a>
                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="link">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\UronTask\resources\views/welcome.blade.php ENDPATH**/ ?>