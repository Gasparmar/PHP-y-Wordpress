<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea unidad 2</title>
</head>
<body>
    <?php
    $empleado1 = 5000;
    $empleado2 = 7000;
    $total = $empleado1 + $empleado2;
    ?>
    <section>
        <div class="gastos">
            <h1>Gasto mensual de empleados.</h1>
        <?php 
        echo "<h2>El empleado 1 cuesta: </h2>", $empleado1;
        echo "<h2>El empleado 2 cuesta: </h2>", $empleado2;
        echo "<h2>El gasto total por mes es de: </h2>", $total;

        ?>
        </div>
    </section>
    
</body>
</html>