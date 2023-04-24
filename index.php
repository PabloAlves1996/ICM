
<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculo IMC</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        
        <div align="center">
            <small>Seja bem vindo(a), data atual <?= date("d/m/Y") ?> - <a href="index.php" tittle="Atualize a página" style="color:#fff;">Atualizar</a></small>

            <div class="formulario">
                <h3>Calcule o seu IMC</h3>

                <?php

                $resultado = filter_input(INPUT_GET, 'resultado', FILTER_VALIDATE_INT);

                switch($resultado){
                    case $resultado <= 16:
                    echo '<div class="resultado-atencao">
                    Magreza Grave, Deve se Alimentar Mais!
                    </div>';
                    break;

                    case $resultado <= 17:
                    echo '<div class="resultado-atencao">
                    Magreza Moderada!
                    </div>';
                    break;

                    case $resultado <= 18:
                    echo '<div class="resultado-atencao">
                    Magreza Leve!
                    </div>';
                    break;

                    case $resultado <= 25:
                    echo '<div class="resultado-sucesso">
                    Você está no peso certo e saudável!
                    </div>';
                    break;

                    case $resultado <= 30:
                    echo '<div class="resultado-atencao">
                    Você está acima do peso, precisa malhar!
                    </div>';
                    break;

                    case $resultado <= 35:
                    echo '<div class="resultado-negativo">
                    Obesidade grau 1, você precisa malhar com urgência!
                    </div>';
                    break;

                    case $resultado <= 40:
                    echo '<div class="resultado-negativo">
                    Obesidade grau 2, você precisa malhar com urgência!
                    </div>';
                    break;

                    case $resultado <= 100:
                    echo '<div class="resultado-negativo">
                    Obesidade grau 3, você precisa malhar com urgência!
                    </div>';
                    break;
                }

                ?>

                <img src="assets/img/corpo.png" alt="calculo IMC" class="corpo">

                <form action="imc.php" method="post">
                    <input type="text" name="altura" placeholder="Altura, Exe: 1.80">
                    <input type="number" name="peso" placeholder="Peso, Exe: 90">
                    <button type="submit" name="celular">Calcular</button>
                </form>

                <p>Criado por PabloSilva</p>
            </div>
        </div>
    </body>
</html>