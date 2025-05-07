<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="div container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6">
                <form method="post">
                    <div class="form-group">
                        <label for="">Digite seu nome: </label> <br>
                        <input type="text" class="form-control" name="nome"> <br>
                        <input type="button" class="btn btn-outline-primary" value="Enviar">
                    </div>
                </form>
                <div class="alert alert-primary d-flex justify-content-center" role="alert">
                    <h5 class="alert-heading">
                    <?php
                    if(isset($_POST['nome'])){
                    echo "Seja Bem Vindo ". $_POST['nome'] ."";
                }
                    else {
                        echo "Digite seu nome";
                    }
                    ?>
                    </h5>
            </div>
            </div>
        </div>
    </div>
    
</body>
</html>