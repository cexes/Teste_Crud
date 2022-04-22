<?php
     
  class crud {
    
    
       
        private $conexao;
        private $nome;
        private $cnpj;
       
       public function __construct($conexao,$nome,$cnpj) {
          $this->conexao =$conexao->conectar();
          $this->nome = $nome;
          $this->cnpj = $cnpj;
          
          
      }


      public function inserir() {
        if(isset($this->nome)&& isset($this->cnpj)) {
        $query = 'INSERT INTO tb_empresa(dataCriacao)values(:criado)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':criado','NOW()');
        $stmt->execute();
        }
        if(isset($this->nome)) {
              $query = 'INSERT INTO tb_empresa(NomeEmpresa)values(:nome)';
              $stmt = $this->conexao->prepare($query);
              $stmt->bindValue(':nome',$this->nome);
              $stmt->execute();
        }
       
        if(isset($this->cnpj)) {
        $query = 'INSERT INTO tb_empresa(DocumentoEmpresa)values(:cnpj)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':cnpj',$this->cnpj);
        $stmt->execute();
      }
    }
     
      
      public function recuperar() {
           
      }

      public function atualizar() {
           
      }

      public function remover() {
           
      }
  }
