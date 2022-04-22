<?php

class CadastroUser
{

    private $nome;
    private $senha;
    private $cpf;



    public function __getNome($nome)
    {
        return $this->nome;
    }
    public function __setNome($nome)
    {
        return $this->nome = $nome;
    }

    public function __getSenha($senha)
    {
        return $this->senha;
    }
    public function __setSenha($senha)
    {
        return $this->senha = $senha;
    }
    public function __getCpf($cpf)
    {
        return $this->cpf;
    }
    public function __setCpf($cpf)
    {
        return $this->cpf = $cpf;
    }
}
