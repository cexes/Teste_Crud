<?php



require "cadastroEmpresa.php";
require "conexao.php";
require "crudEmpresa.php";



$conexao = new Conexao();
$CadastroEmpresa =  new CadastroEmpresa();
$CadastroEmpresa->__setNome($_POST['nome-empresa']);
$CadastroEmpresa->__setCnpj($_POST['cnpj']);

$crudempresa = new crud($conexao,$CadastroEmpresa->__getNome('nome'),$CadastroEmpresa->__getCnpj('cnpj'));
$crudempresa->inserir();



?>