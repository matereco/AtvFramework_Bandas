<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>cadastrar</title>
</head>
<body>
    <div class="container">
        <div colass = "row mt-5">




                <form method="post" action="">

                    <?php echo csrf_field(); ?>

                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="Text" class="form-control" name="nome" id="nome" placeholder="Digite o nome da banda">
                    </div>
                    <div class="mb-3">
                        <label for="estilo" class="form-label">Estilo</label>
                        <input type="Text" class="form-control" name="estilo" id="estilo" placeholder="Digite o estilo da banda">
                    </div>
                    <div class="mb-3">
                        <label for="ano_criacao" class="form-label"> Ano de criação</label>
                        <input type="Text" class="form-control" name="ano_criacao" id="ano_criacao" placeholder="Digite o ano de criação da banda">
                    </div>
                    <div class="mb-3">
                        <label for="total_de_discos" class="form-label"> Total de discos</label>
                        <input type="Text" class="form-control" name="total_de_discos" id="total_de_discos" placeholder="Digite o total de discos da banda">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class ="btn btn-success"> cadastrar</button>
                    </div>
                </form>
            </div>

        </div>
     </div>

</body>
</html>
<?php /**PATH C:\Users\bruno\Documents\projetoBandas\resources\views/cadastro/cdBandas.blade.php ENDPATH**/ ?>