<?php

require "cadastrouser.php";
require "conexao.php";
require "crudUser.php";

header('Location:empresa.php');

$conexao = new Conexao();
$CadastroUser =  new CadastroUser();
$CadastroUser->__setNome($_POST['nome']);
$CadastroUser->__setSenha($_POST['senha']);
$CadastroUser->__setCpf($_POST['cpf']);

$crud = new crud($conexao,$CadastroUser->__getNome('nome'),$CadastroUser->__getSenha('senha'),$CadastroUser->__getCpf('cpf'));
$crud->inserir();

