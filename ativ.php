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
                <form action="" method="post">
                    <div class="form-group row">
                        <div class="col-12 col-sm-6">
                            <input type="number" class="form-control form-control-lg" name="n1" id="n1" placeholder=" número1">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="number" class="form-control form-control-lg" name="n2" id="n2" placeholder=" número2">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enviar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-19 col-sm-8 col-md-6 ">
                <?php
                    if(isset($_POST['n2'])){
                        $somaimpar = 0;
                        $somapar = 0;
                        $pares = [];
                        $impares = [];
                        $n1 = $_POST['n1'];
                        $n2 = $_POST['n2'];

                        if($n1 > $n2){
                            $aux = $n1;
                            $n1 = $n2;
                            $n2 = $aux;
                        }

                        for($i = $n1; $i <= $n2; $i++){
                            if($i % 2 == 0){
                                $pares[] = [$i];
                                $somapar += $i;
                            } else{
                                $impares[] = [$i];
                                $somaimpar += $i;
                            }
                        }

                        echo "Números pares: ";
                        echo json_encode($pares);
                        echo "<br>Soma total: {$somapar} <br> <br>";

                        echo "Números impares: ";
                        echo json_encode($impares);
                        echo "<br>Soma total: {$somaimpar}";

                    } else{
                        echo '<p class="text-dark"> Digite um número... </p>';
                    }
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>