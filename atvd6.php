<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Salário de Vendedor</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        body {
            background-color: #f2f6ff; /* Azul pastel */
            margin: 0;
            padding: 0;
        }

        * {
            font-family: "Montserrat";
        }

        .container {
            max-width: 600px; /* Painel maior */
            margin: 50px auto;
            background-color: #e3f2fd; /* Azul pastel mais escuro */
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-align: center;
            color: #0044cc; /* Azul escuro */
        }

        form {
            margin-top: 20px;
        }

        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #63a4ff; /* Azul pastel */
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #4b88e4; /* Azul mais escuro */
        }

        .sucesso {
            background-color:#4169e1; 
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }

       
    </style>
</head>
<body>
    <div class="container">
        <h2>Calculadora de Salário de Vendedor</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="">Nome do Vendedor: </label><input type="text" name="nomeVendedor"><br>
            <label for="">Meta Semanal 1  </label><input type="text" name="metaSemanal"><br>
            <label for="">Meta Semanal 2  </label><input type="text" name="metaSemanal"><br>
            <label for="">Meta Semanal 3  </label><input type="text" name="metaSemanal"><br>
            <label for="">Meta Semanal 4  </label><input type="text" name="metaSemanal"><br>
            <label for="">Meta Mensal  </label><input type="text" name="metaMensal"><br>
            <input type="submit" value="Calcular Salário">
        </form>
        <?php if(isset($resultado)) { echo "<div class='$tipoNotificacao'>$resultado</div>"; } ?>
    </div>
</body>
</html>
