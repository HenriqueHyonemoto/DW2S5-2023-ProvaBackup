<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initical-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <title>Praticando - Calculadora média</title>
</head>

<body>
<div class = "Margin" > 
    <H1>Praticando - Calculadora média</H1>
    <hr>
    <?php
    $n1 = filter_input(INPUT_POST,"nota1");
    $n2 = filter_input(INPUT_POST,"nota2");
    $n3 =  filter_input(INPUT_POST,"nota3");
    print_r($_POST);
    ?>
    <div class = "Resultado">
<p1>Um aluno com as notas <?php echo $n1?>,<?php echo $n2?>,<?php echo $n3?> tem uma média igual a <?php echo ($n1+$n2+$n3)/3?></p1>
<br>
<br>
<p>Com essa média o aluno está
<?php
if ((($n1+$n2+$n3)/3)<4){
    echo "<a style='color:red;'>REPROVADO</a>";
}else if((($n1+$n2+$n3)/3)>=4 && (($n1+$n2+$n3)/3)<6){
    echo "<a style='color:orange;'>De Recuperação</a>";
}else{
    echo "<a style='color:lightgreen;'>Aprovado!</a>";
}
?>
</p>
</div>

<hr>
<p><a href="CalculadoraMedia.php">Voltar</a></p>
</body>


</html>

