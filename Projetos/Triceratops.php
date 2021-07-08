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
                <img src="https://s2.glbimg.com/J3SqbZQ68uOaNcPDMO6BV2lweUc=/e.glbimg.com/og/ed/f/original/2013/12/16/bronto.jpg" align="left" height="150" width="150">
                <div>
                    <h3>Apatossauro</h3>
                    <p>Significado do nome: “Lagarto enganador”
                        Habitat: Oeste da América do Norte
                        Comprimento: 23-28m
                        Peso: 20.000-36.000 kg
                        Postura: Quadrúpede
                        Dieta: Samambaias e ramos de coníferas
                        Idade: final do Jurássico, 150 milhões de anos atrás
                        O apatossauro é um dos maiores animais que já existiu na Terra. Um adulto médio é 
                        mais comprido do que dois ônibus escolares estacionados frente a frente e pesa até quatro 
                        elefantes africanos adultos.</p>
                </div>
            </article>
</body>
</html>