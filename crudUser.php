<?php
     
  class crud {
    
    
       
        private $conexao;
        private $nome;
        private $senha;
        private $cpf;
       
       public function __construct($conexao,$nome,$senha,$cpf) {
          $this->conexao =$conexao->conectar();
          $this->nome = $nome;
          $this->senha = $senha;
          $this->cpf = $cpf;
          
          
      }



      public function inserir() {
        if(isset($this->nome)&& isset($this->senha)) {
        $query = 'INSERT INTO func(criado)values(:criado)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':criado','NOW()');
        $stmt->execute();
        }
        if(isset($this->nome)) {
              $query = 'INSERT INTO func(nome)values(:nome)';
              $stmt = $this->conexao->prepare($query);
              $stmt->bindValue(':nome',$this->nome);
              $stmt->execute();
        }
        if(isset($this->senha)) {
          $query = 'INSERT INTO func(senha)values(:senha)';
          $stmt = $this->conexao->prepare($query);
          $stmt->bindValue(':senha',$this->senha);
          $stmt->execute();
        }
      
        if(isset($this->cpf)) {
        $query = 'INSERT INTO func(cpf)values(:cpf)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':cpf',$this->cpf);
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


?>
