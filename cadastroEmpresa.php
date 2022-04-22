<?php

class CadastroEmpresa
{

    private $nome;
    private $cnpj;



    public function __getNome($nome)
    {
        return $this->nome;
    }
    public function __setNome($nome)
    {
        return $this->nome = $nome;
    }

    
    public function __getCnpj($cnpj)
    {
        return $this->cnpj;
    }
    public function __setCnpj($cnpj)
    {
        return $this->cnpj = $cnpj;
    }
}
