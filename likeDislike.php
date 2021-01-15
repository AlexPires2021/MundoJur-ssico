<?php 
    // Implementação de um Post/Redirect/Get Pattern

    // Testa se existe o cookie 'user'
	if( isset( $_COOKIE['user'] ) )
	{
		$username = $_COOKIE['user'];
    }
    else
    {
        header("Location: ./galeria.php",TRUE,303);
        exit;
    }
	
    include( 'fotosBD.php' );

    // Recebe por POST os parâmetros 'fotoId' e 'opLike'  
    $fotoId = $_POST['fotoId'];
    $operacao = $_POST['opLike'];
    
    if( $operacao == "Like")
        updateLikeFoto( $fotoId, true, $username );
    elseif( $operacao == "disLike" )
        updateLikeFoto( $fotoId, false, $username );
 
    header("Location: ./galeria.php",TRUE,303);
    exit;

?>