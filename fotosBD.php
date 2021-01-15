<?php 
	
  function estabelerConexao()
{
     // Deviam estar num ficheiro de configuração
    $hostname = "localhost";
    $databasename = "id15732811_pw_2020";
    $username = "id15732811_pw_user";
    $password = "hC]]AS+eu64qLh&x";
    
    try {
        $conexao = new PDO("mysql:host=$hostname;dbname=$databasename;charset=utf8mb4",
                       $username, $password);
    }
    catch (\PDOException $e) {
        echo $e->getMessage();
    }

    return $conexao;

}

function getFotos() 
{
    $conexao = estabelerConexao();

    $stmt = $conexao->query('SELECT * FROM fotos');

    $fotos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $fotos;
}

function updateLikeFoto( $idFoto, $like, $username )
{
    $conexao = estabelerConexao();

    if( $like )
        $stmt = $conexao->prepare("INSERT INTO userlikes ( `username`, `fotoId` ) VALUES (:username, :fotoId )");
    else
    $stmt = $conexao->prepare("DELETE FROM userlikes WHERE `username`=:username AND `fotoId`=:fotoId ");

    $stmt->execute( [ 'username' => $username, 'fotoId' => $idFoto] );
    
}

function userExists( $username )
{
    $conexao = estabelerConexao();
    $stmt = $conexao->prepare("SELECT username FROM users WHERE username=:username" );
    $stmt->execute( [ 'username' => $username ] );
    $username = $stmt->fetchColumn();

    // True se for String , $username pode ser false ou ter o nome do user 
    return is_string($username);

}

function getLikes( $username )
{
    $conexao = estabelerConexao();
    $stmt = $conexao->prepare("SELECT fotoId FROM userlikes WHERE username=:username" );
    $stmt->execute( [ 'username' => $username ] );
    $likes = $stmt->fetchAll(PDO::FETCH_COLUMN);
   
    return $likes; 
}

 ?>