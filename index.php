<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro usuários</title>
</head>    
<body>
    <h1>Cadastro usuário</h1>
    <form method="POST" action="processa.php"> 
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Digite seu email"><br><br>
        <input type="submit" value="Cadastrar">

    </form> 

</body>
</html>