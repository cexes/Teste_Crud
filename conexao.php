<?php
    
    class Conexao {


     private $host = 'localhost';
     private $dbname = 'funcionario';
     private $user ='root';
     private $pass ='';

   public function conectar() {
        try {

          $conexao = new PDO(
               "mysql:host=$this->host;dbname=$this->dbname",
               "$this->user",
               "$this->pass"
          );
         return $conexao;
     }
            catch (PDOexception $e) {
                echo '<p> erro com o banco</p>'.$e->getMessage();
        }
     }
}
   


?>