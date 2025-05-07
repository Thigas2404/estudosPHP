<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 alert alert-info">
                <h2 class="text-center text-dark">
                    trabalho com array associativo
                </h2>
                <h2 class="text-dark">
                    construindo um array associativo
                </h2>
                <p class="text-dark">
                $dados = ()
                    'professor' => 'adriano',
                    'disciplina' => 'programação na web 2',
                    'instituição' => 'etec/fatec',
                );
                </p>
                <p class="text-dark">
                $dados = [
                    'professor' => 'adriano',
                    'disciplina' => 'programação na web 2',
                    'instituição' => 'etec/fatec',
                ];
                </p>
                <h4 class="text-dark">
                  imprimindo o array na tela com o comando var_dump()  
                </h4>
                <?php
                $dados = [
                    'professor' => 'adriano',
                    'disciplina' => 'programacao na web 2',
                    'instituicao' => 'etec/fatec',
                ];
                echo '<p class=text-dark>'. var_dump($dados);
                ?>
                <h4 class="text-center text-dark">
                    imprimindo o array na tela de forma organizada com o json.encode()
                </h4>
                <?php
                echo json_encode($dados);
                ?>
                <h4 class="text-dark">
                    imprimindo somente o nome do professor
            </h4>
            <?php
            echo $dados['professor'];
            ?>
            </div>
        </div>
    </div>
</body>
</html>