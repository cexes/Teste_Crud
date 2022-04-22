<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h1>Cadastro Empresa</h1>
      <div id="container">

            <form method="post" action="cadastroEmpresa.php"> 
                       <label>Nome: </label>
                       <input placeholder=" empresa que trabalha" name="nome-empresa" type="text"> <br>
                       <label>CNPJ: </label>
                       <input placeholder="Digite seu CNPJ" type="text" name="cnpj" pattern="(\d{3}\.?\d{3}\.?\d{3}-?\d{2})|(\d{2}\.?\d{3}\.?\d{3}/?\d{4}-?\d{2})"> <br>
                       <input type="submit"name="enviar">
                            

            </form>

           

     </div>

</body>
</html>
