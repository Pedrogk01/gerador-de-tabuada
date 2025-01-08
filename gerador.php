<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="gerador.css">
</head>
<body>
    <div class="box">
        <fieldset>
            <legend><b>Gerador de Tabuada</b></legend>
            <form method="post">
                <label for="num">Número:</label>
                <input type="number" name="num" required><br><br>

                <input type="submit" value="Calcular">
            </form>     
    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $num = $_POST['num'];

    
    echo "<br>Tabuada do $num:<br><br>";
    for ($i = 0; $i <= 10; $i++) {
    $resultado = $num * $i;
    echo "$num x $i = $resultado<br>";
    }
    }
    ?>
        </fieldset>       
    </div>
</body>
</html>