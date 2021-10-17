<!DOCTYPE html>
<html lang="pt-br">
    <header>
        <meta charset="utf-8"/>
        <title>Competição de Natação</title>
        <meta name="author" content="Leonardo Lopes da Luz" />
        <meta name="description" content="Sistemas de Competiçãode Natação" />
        <meta name="viewport" content="width=device.width, initial-scale=1" />
    </header>
    <body>
        <h1 align="center">Formulário Para Inscrição de Competidores</h1>
        <hr />
        <form action="script.php" method="POST">
            <p>Seu Nome: <input type="text" name="nome" required/></p>
            <p>Sua Idade: <input type="number" name="idade" required/></p>
            <p><input type="submit" value="Inscrever" />
            <input type="reset" value="Limpar" /></p>
        </form>
    </body>
</html>