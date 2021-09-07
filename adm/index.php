<!doctype html>
<html lang="pt-br">

<head>
    <title>Pizzaria Byte - Back Office</title>
    <meta charset="utf-8">
    <meta name="description" content="Site da Pizzaria">
    <meta name="keywords" content="Pizza, Pedido online">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/estilos.css">
</head>

<body>
    <header>
        <h1>Pizza Byte</h1>
        <p>Área de Administração</p>
    </header>

    <main>
        <h2>Área Restrita</h2>
        <hr>
        <form method="POST" action="adm_sabor.php">
            <fieldset>                  
                <legend>Identifique-se</legend>
                <div>
                    <label for="login">Login: </label>
                    <input type="text" name="login" size="50" maxlength="50" id="login">
                </div>
                <br>
                <div>
                    <label for="senha">Senha: </label>
                    <input type="password" name="senha" size="50" maxlength="50" id="senha">
                </div>
                <br>
                <div>
                    <input type="submit" value="Logar" name="logar">
                    <input type="reset" value="Limpar campos">
                </div>
            </fieldset>
        </form>
    </main>
</body>

</html>