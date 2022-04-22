<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
           <h1>Cadastro User</h1>
      <div id="container">

            <form method="post" action="cadastro.php"> 
                       <label>Nome: </label>
                       <input placeholder="Digite seu nome" name="nome" type="text"> <br>
                       <label>Senha: </label>
                       <input placeholder="Digete sua senha" name="senha" type="password"> <br>
                       <label>CPF: </label>
                       <input placeholder="Digite seu CPF" type="text" name="cpf" pattern="(\d{3}\.?\d{3}\.?\d{3}-?\d{2})|(\d{2}\.?\d{3}\.?\d{3}/?\d{4}-?\d{2})"> <br>
                       <input type="submit"name="enviar">
                            

            </form>

           

     </div>

</body>
</html>