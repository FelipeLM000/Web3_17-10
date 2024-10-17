<html>
    <head>
        <title>Teste!</title>
    </head>

    <body>
        <h1>Essa é a pagina de teste :D</h1>
        <!-- Este é um comentário HTML -->
        

     
    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <p><?php echo e($cliente); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </body>

</html><?php /**PATH C:\xampp\htdocs\PROJETO1\resources\views/teste.blade.php ENDPATH**/ ?>