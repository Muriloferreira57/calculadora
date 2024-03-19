<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Simples</title>
</head>
<body>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="numero1" placeholder="Digite o primeiro número" required>
        <input type="text" name="numero2" placeholder="Digite o segundo número" required>
        <input type="submit" value="Calcular">
        <select name="operador">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
       
    </form>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operador = $_POST['operador'];
        $resultado = 0;
 
        switch ($operador) {
            case "+":
                $resultado = $numero1 + $numero2;
                break;
            case "-":
                $resultado = $numero1 - $numero2;
                break;
            case "*":
                $resultado = $numero1 * $numero2;
                break;
            case "/":
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                } else {
                    echo "Não é possível dividir por zero.";
                }
                break;
        }
 
        echo "<h3>O resultado é: $resultado</h3>";
    }
    ?>
</body>
</html> 