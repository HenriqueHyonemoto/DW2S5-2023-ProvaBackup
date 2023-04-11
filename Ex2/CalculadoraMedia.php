<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initical-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <title>Praticando - Calculadora média</title>
</head>
<style>
    .txtalgn{
        text-align: end;
    }
    </style>
<body>
    <H1>Praticando - Calculadora média</H1>
    <hr>
    <?php
    $av = filter_input(INPUT_POST, "av");
    $trab = filter_input(INPUT_POST, "trab");
    $pratc =  filter_input(INPUT_POST, "pratc");
    //print_r($_POST);
    ?>
    <div>
        <form action="CalculadoraMedia.php" method="POST">

            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-end">Nota Avaliações:</label>
            <div class="col-sm-2">
                <input type="number" class="form-control form-control-sm" name="av" id="av">
                <div class = "txtalgn">
                <a style = color:grey>Peso 5.0</a>
                </div>
            </div>
        
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-end">Nota Trabalhos:</label>
            <div class="col-sm-2">
                <input type="number" class="form-control form-control-sm" name="trab" id="trab">
                <div class = "txtalgn">
                <a style = color:grey>Peso 2.0</a>
</div>
            </div>

            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-end">Nota Praticandos (Em Sala):</label>
            <div class="col-sm-2">
                <input type="number" class="form-control form-control-sm" name="pratc" id="pratc">
                <div class = "txtalgn">
                <a style = color:grey>Peso 3.0</a>
</div>
            </div>

            <br>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
    </div>
    <div class = "Resultados">
    <?php
    if (isset($_POST)){
        $media = ($av*5.0+$trab*2.0+$pratc*3.0)/10;
 /* if($av > $trab && $av > $pr){
            $primeiro = "Avaliações: <b>$av</b>";
        }

        if($trab > $av && $trab > $pr){
            $primeiro = "Trabalhos: <b>$trab</b>";
        }

        if($pratc > $av && $pratc > $trab){
            $primeiro = "Praticandos: <b>$pratc</b>";
        }
        */

        $ordenadas = ["Avaliações:"=>$av,"Trabalhos: "=>$trab,"Praticandos: "=>$pratc];

        arsort($ordenadas);

        foreach ($ordenadas as $key=>$value){
         echo "$key $value<br>";
        }
        
        echo "Média final: <b>$media</b>";
    }
   
    ?>
    

    </div>
    </form>


    <hr>

</body>

</html>