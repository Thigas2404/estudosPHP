<!DOCTYPE html>
<html lang="pt-br">
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
            <div class="col-12 col-sm-8 col-md-6">
                <form method="post">
                    <div class="form-group">
                        <select name="animal" id="animal" class="form-control form-control-lg">
                            <option value="">Selecione o animal que mais te agrada</option>
                            <option value="1">Gato</option>
                            <option value="2">Cachorro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row mt-5 rounded justify-content-center">
        <div class="col-12 col-sm-8 col-md-6">
            <?php
            if(isset($_POST['animal'])){
                if ($_POST['animal'] == 1){
                echo "<img src=gato2.jpg class=img-fluid p-2 rounded>";
            }else {
                echo "<img src=cachorro.jpg class=img-fluid p-2 rounded>";
            }
            } 
                else {
                    echo "Escolha seu animal de preferencia...";
                }
            ?>
        </div>
    </div>
</body>
</html>