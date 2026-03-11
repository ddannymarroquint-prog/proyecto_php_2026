<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primera App en PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 { color: #2c3e50; }
        img {
            max-width: 300px;
            border-radius: 10px;
            margin-top: 20px;
            border: 3px solid #3498db;
        }
    </style>
</head>
<body>

    <div class="container">
        <?php
            // Definimos el mensaje en una variable
            $mensaje = "Hola Mundo, soy Danny Marroquin Trujillo";
            
            // Lo mostramos en pantalla
            echo "<h1>" . $mensaje . "</h1>";
        ?>
        
        <p>Esta es una imagen generada por IA:</p>
        <img src="atardecer.jpeg" alt="Imagen generada por IA">
    </div>

</body>
</html>
