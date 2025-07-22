<!DOCTYPE html>
<html>
<head>
    <title>Contador de Vocales</title>
</head>
<body>
    <h2>Contador de Vocales</h2>
    <form method="post">
        <label>Ingrese una frase:</label><br>
        <textarea name="frase" rows="4" cols="50"><?php if(isset($_POST['frase'])) echo $_POST['frase']; ?></textarea><br><br>
        <input type="submit" value="Contar Vocales">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $frase = strtolower($_POST["frase"]);
        $vocales = ['a', 'e', 'i', 'o', 'u'];
        $conteo = array_fill_keys($vocales, 0);

        for ($i = 0; $i < strlen($frase); $i++) {
            $letra = $frase[$i];
            if (array_key_exists($letra, $conteo)) {
                $conteo[$letra]++;
            }
        }

        echo "<h3>Resultado:</h3>";
        foreach ($conteo as $vocal => $cantidad) {
            echo "Vocal '$vocal': $cantidad<br>";
        }
    }
    ?>
</body>
</html>
