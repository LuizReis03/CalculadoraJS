<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/style.css">
    <title>Formulário</title>
</head>

<body>

    <main>
        <form action="../back/formulario.php" method="GET">

            <label for="Nome">Nome</label><br>
            <input type="text" name="nome">
            <br><br>

            <label for="Sobrenome">Sobrenome</label><br>
            <input type="text" name="sobrenome">
            <br><br>

            <label for="Cidade">Cidade</label><br>
            <input type="text" name="cidade">
            <br><br>

            <label for="Mensagem">Mensagem</label><br>
            <input type="text" name="mensagem">
            <br><br>

            <label for="Sexo">Sexo</label><br>
            <select name="sexo">
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
                <option value="O">Outro</option>
            </select>
            <br><br>
            
            <button type="submit">Enviar</button>

        </form>
    </main>

</body>

</html>