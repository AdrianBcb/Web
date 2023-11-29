<!DOCTYPE html>
<html>
<head>
    <title>Tablas de Multiplicar</title>
</head>
<body>
    <h1>Tablas de Multiplicar</h1>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<h2>Tabla del $i</h2>";
        echo "<table border='1'>";
        for ($j = 1; $j <= 10; $j++) {
            $resultado = $i * $j;
            echo "<tr><td>$i x $j</td><td>= $resultado</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
