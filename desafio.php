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
            <div class="col-12 col-sm-8 col-md-6">
                <form method="post">
                    <div class="form-group row">
                        <div class="col-12 col-sm-6">
                        <input type="number" name="km" id="km"
                        class="form-control form-control-lg"
                        placeholder="Km rodados">
                    </div>
                    <div class="col-12 col-sm-6">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Cantar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 alert alert-primary">
                <?php
                 if(isset($_POST['km'])){
                    $km = $_POST['km'];
                    for (;$km > 0; $km--){
                        $km2 = $km - 1;
                        if ($km == 2) {
                            echo $km. " quilômetros, ". $km. " quilômetros, ". " pare um pouquinho, descanse um pouquinho, ". $km2. " quilômetro...". "<br>";
                        }
                        else if ($km %2 == 0){
                        echo $km. " quilômetros, ". $km. " quilômetros, ". " pare um pouquinho, descanse um pouquinho, ". $km2. " quilômetros...". "<br>";
                    }
                    else if ($km == 1) {
                        echo $km. " quilômetro, ". " pare um pouquinho, descanse um pouquinho.";
                    }
                    else{
                        echo $km. " quilômetros, ". " pare um pouquinho, descanse um pouquinho, ". $km2. " quilômetros...". "<br>";
                    } 
                    }
                }
                 else {
                        echo '<p class= "text-dark">Escolha a quantidade de Km
                        </p>';
                    }
                ?>
            </div>
        </div>
    </div>                     
</body>
</html>