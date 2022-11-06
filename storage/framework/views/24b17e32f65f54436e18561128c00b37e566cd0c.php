<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>


<div class="container">
    <div class = "row mt-5">
        <div class = "col-md-12">
            <?php if(Session::has('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session::get('success')); ?>


            </div>
            <?php endif; ?>
        <div class = "col-md-12">

            <table class="table">
                <tr>
                    <th>Nome</th>
                    <th>Estilo</th>
                    <th>Criada em</th>
                    <th>Discos</th>
                </tr>

            <div class="mb-3">
                <?php $__currentLoopData = $bandas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($banda['nome']); ?></td>
                    <td><?php echo e($banda['estilo']); ?></td>
                    <td><?php echo e($banda['ano_criacao']); ?></td>
                    <td><?php echo e($banda['total_de_discos']); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="mb-3">
                <form method="get" action="bandas">
                    <button type="submit" class ="btn btn-success"> Add nova banda</button>

                </form>
            </div>


        </div>

    </div>
</div>

</body>
</html>
<?php /**PATH C:\Users\bruno\Documents\projetoBandas\resources\views/cadastro/tdBandas.blade.php ENDPATH**/ ?>