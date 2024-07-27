<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>WebEM User</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/css/notesPanel.css' , 'resources/css/Fonts/roboto.css', 'resources/css/employeesPanel.css', 'resources/js/app.js']); ?>
    </head>
    <body class="roboto-light">
        <div class="container">
            <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo e($slot); ?>

        </div>
    </body>


</html><?php /**PATH /Users/leonbuena/Downloads/WebEm-leon-branch/website2/webEm/resources/views/components/layout.blade.php ENDPATH**/ ?>