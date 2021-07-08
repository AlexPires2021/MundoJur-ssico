<?php
    //Dados do 000Webhost
    //$con = mysqli_connect("localhost","id15732811_localhost","o=Liza2P?Oqsg=1H","id15732811_jurassicalex");
    
    //Dados do computador local
    error_reporting(0);
    $con = mysqli_connect("localhost","Alex","1234","dinossauros");
    if(mysqli_connect_errno()){
        echo "Failed to connect : " . mysqli_connect_error(); 
    }

    $idlink = $_GET['idDinossauro'];

    $select = "select * from dinossauros where id_Dinossauro = '$idlink'";
    $connect = mysqli_query($con, $select);

    while($search = mysqli_fetch_array($connect)){
        $id = $search['id_Dinossauro'];
        $nomeDinossauro = $search['nomeDinossauro']; 
        $descricao = $search['descricao'];
        $foto = $search['fotos'];

        $locationbar = "$nomeDinossauro $descricao";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="Dinossauros.css">
</head>
<body>
    <header>
        <h1>Mundo Jurássico</h1> 
    </header>
    <main>
        <section>
           <article>
                <img src="https://1.bp.blogspot.com/-poP2ZVNIy18/WqptbasphrI/AAAAAAAABco/Kozkzv5yMHQtd8OPzTMBNvOH7WHBH4MtwCLcBGAs/s1600/7bbae518c3d7154b4f0db55a81407407.jpg" align="left" height="150" width="150">
                <div>
                    <h3>Anquilossauro</h3>
                    <p>Significado do nome: “Lagarto fundido”
                        Habitat: Oeste da América do Norte
                        Comprimento: 10m
                        Peso: 6.000 kg
                        Postura: Quadrúpede
                        Dieta: Samambaias e outra vegetação rasteira
                        Idade: Cretáceo Superior, 68-66 milhões de anos atrás
                        Os paleontólogos chamam o Ankylosaurus de "tanque vivo". É fácil perceber por quê. 
                        Este dinossauro herbívoro está bem protegido com uma armadura pontiaguda, desde os ossos 
                        fundidos de seu crânio até o porrete arredondado na extremidade de sua cauda.</p>
                </div>
            </article>
</body>
</html>