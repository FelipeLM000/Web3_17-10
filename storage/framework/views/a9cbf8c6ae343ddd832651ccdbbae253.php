<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HAHAHAAHAHAHAHAHA</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($cliente->nome); ?></td>
                <td><?php echo e($cliente->cpf); ?></td>
                <td><?php echo e($cliente->telefone); ?></td>
                <td><?php echo e($cliente->email); ?></td>
                <td>
                    <form action="deletarCliente/<?php echo e($cliente->id); ?>" method="POST" onsubmit="return CONFIRM('TEM CERTEZA?');">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit">Deletar</button>
                    </form>
                </td>
                <td>
                    <a href="">Editar</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\Projeto1\resources\views/Cliente/index.blade.php ENDPATH**/ ?>