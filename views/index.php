<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONVERSOR DE REAL</title>

</head>



<body>

    <h1>CONVERSOR DE REAL</h1>

    <div class="container">
        <div class="form">
            <form action="../methods/converter.php" method="POST">

            <p>Valor a ser convertido -- ></p>
            <input type="text" placeholder="Digite valor:" required name="valorDigitado">
                <br><br>
                <p>Para:</p>
                <select name="tipoMoedaResultado">
                    
                    <option value="">--Selecione--</option>
                    <option value="dolar">Dólar Americano</option>
                    <option value="euro">Euro</option>
                    <option value="pesoArgentino">Peso Argentino</option>
                    <option value="todos">Todos</option>


                </select>


                <br><br>
                <div class="botao">



                    <input type="submit" value="Converter">

                </div>




            </form>
        </div>
    </div>


</body>

</html>