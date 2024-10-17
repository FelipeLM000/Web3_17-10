
<?php $__env->startSection('title','Fale Conosco'); ?>
<?php $__env->startSection('conteudo'); ?>

    <div id="contato">
       <form action="#">
            <label>Nome:</label>
            <input class="form-control" type="text" name="nome">
            <label>Telefone:</label>
            <input class="form-control" type="tel" name="telefone">
            <label>E-mail</label>
            <input class="form-control" type="email" name="email">
            <label>Digite a sua mensagem:</label>
            <textarea class="form-control" name="mensagem" cols="30" rows="10"></textarea>
            <input class="btn btn-primary" type="submit"  value="Enviar">       
       </form>

       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14452.999928855523!2d-50.1695107!3d-25.0933979!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e81a1338c2ca9d%3A0x4dd4827f11995364!2sFaculdade%20Senac%20Ponta%20Grossa!5e0!3m2!1spt-PT!2sbr!4v1688080528159!5m2!1spt-PT!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projeto1\resources\views/faleconosco.blade.php ENDPATH**/ ?>