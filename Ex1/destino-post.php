<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <title>Formulário</title>

    <body>

    <style>
        body {
            padding: 10%;
            color: <?php echo $cor_txt;?>;
            <?php
            $url_img = filter_input(INPUT_POST, "url-img", FILTER_SANITIZE_SPECIAL_CHARS);
            $mostra_imagem = filter_input(INPUT_POST, "mostra_imagem", FILTER_SANITIZE_SPECIAL_CHARS);

            if ($mostra_imagem == "background"){
                echo "background-image: url($url_img);";
            }

            ?>
        }
    </style>

    <?php 

    
        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS);
        $cor_txt = filter_input(INPUT_POST, "cor-txt", FILTER_SANITIZE_SPECIAL_CHARS);
        $fonte = filter_input(INPUT_POST, "fonte", FILTER_SANITIZE_SPECIAL_CHARS);

        $alinhamento = filter_input(INPUT_POST, "alinhamento", FILTER_SANITIZE_SPECIAL_CHARS);
        $repet = filter_input(INPUT_POST, "repet", FILTER_SANITIZE_SPECIAL_CHARS);
        
        echo "<h1 style =text-align:$alinhamento;>$titulo</h1>";

        echo "<hr>";

        for ($i=1;$i<=$repet;$i++){
            echo "$corpo <br>";
        }

        if ($mostra_imagem == "inline"){
            echo "<img src='$url_img' alt='img'>";
        }

    ?>
    <br><br>
    <a href="<?php echo $fonte;?>"><?php echo $fonte;?></a>
    <br>
    <a href = "form.html">Voltar ao Formulario</a>


    
</body>
</html>