<?php
     function estabelerConexao()
     {
          // Desviam de estar num ficheiro de configuração
          //Dados do 000Webhost
          //$databasename = "id15732811_jurassicalex";
          //$hostname = "localhost";
          //$username = "id15732811_localhost";
          //$password = "o=Liza2P?Oqsg=1H";


         //Dado do computador local
          $databasename = "dinossauros";
          $hostname = "localhost";
          $username = "Alex";
          $password = "1234";
         try {
             $conexao = new PDO("mysql:host=$hostname;dbname=$databasename;charset=utf8mb4",$username, $password);
         }
         catch (\PDOException $e) {
             echo $e->getMessage();
         }
     
         return $conexao;
     }
?>