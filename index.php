<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Salário de Vendedor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
   
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        body, html {
            background: url(wallpaper.png);
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
 
        * {
            font-family: "Montserrat";
        }
 
        .container {
            position: absolute;
            max-width: 600px;
            padding: 30px;
            border-radius: 6px;
            border: 1px solid #888;
            background: rgba(0, 0, 0, 0.173);
        }
 
        h2 {
            text-align: center;
            color: #ffffff;
        }
 
        form {
            margin-top: 20px;
        }
 
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
 
        input[type="text"] {
            outline: none;
        }
 
        input[type="text"] {
            color: #626262;
            font-weight: 500;
        }
 
        input[type="submit"] {
            background-color: #63a4ff;
            color: white;
            border: none;
            cursor: pointer;
        }
 
        input[type="submit"]:hover {
            background-color: #4b88e4;
        }
 
        .sucesso {
            background-color:#4169e1;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
 
        label {
            color: #fff;
        }
 
        .vetor {
            position: absolute;
            left: 0;
            bottom: 0;
            animation: run ease-in-out infinite 2s;
        }
 
        @keyframes run {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(10px);
            }
            100% {
                transform: translateY(0);
            }
        }
 
    </style>
</head>
<body>
 
    <div class="vetor">
        <img src="vetor.png">
    </div>
 
    <div class="container">
        <h2 class="animate__animated animate__bounce"> <i class="bi bi-calculator-fill"></i> Calculadora de Salário de Vendedor</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label>
                Nome do Vendedor:
            </label>
            <input type="text" name="nomeVendedor" required><br>
            <label>
                Meta da primeira semana  
            </label>
            <input type="text" name="metaSemanal" required><br>
            <label>
                Meta da segunda semana
            </label>
            <input type="text" name="metaSemanal" required><br>
            <label>
                Meta da terceira semana  
            </label>
            <input type="text" name="metaSemanal" required><br>
            <label>
                Meta da segunda semana  
            </label><input type="text" name="metaSemanal" required><br>
            <label>
                Meta do mês  
            </label>
            <input type="text" name="metaMensal"><br>
 
            <input type="submit" value="Calcular Salário">
        </form>
    </div>
</body>
</html>