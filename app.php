<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Resta</title>
    <style>
        /* Estilos básicos para el diseño */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }
        input[type="number"], button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: #ffffff;
            cursor: pointer;
            border: none;
        }
        button:hover {
            background-color: #0056b3;
        }
        .result {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Calculadora de Resta</h2>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Ingrese el primer número" required>
            <input type="number" name="num2" placeholder="Ingrese el segundo número" required>
            <button type="submit">Restar</button>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Obtener los números ingresados por el usuario
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                // Realizar la resta
                $resultado = $num1 - $num2;
                // Mostrar el resultado
                echo "<p class='result'>Resultado: $resultado</p>";
            }
        ?>
    </div>
</body>
</html>


