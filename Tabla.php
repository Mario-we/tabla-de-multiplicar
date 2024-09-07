<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar</title>
</head>

<body>
    <h1>Tabla de Multiplicar</h1>

    <?php
        $num = $_GET['num'];

        if ($num >= 1 && $num <= 10){
            echo "<h2>Tabla del $num</h2>";
            echo "<table border='1'>";
        }

        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$num x $i</td><td>" . ($num * $i) . "</td></tr>";
        }

        echo "</table>";

    ?>
</body>