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
</div>
</head>
<body>
    <header>
        <h1>Mundo Jurássico</h1> 
    </header>
    <main>
        <section>
            <article>
                <img src="https://rlv.zcache.se/jurassiska_varlden_mosasaurus_poster-r7d4b75e8e47a4c459e0ed1177e38630d_w2q_8byvr_307.jpg?rvtype=content" align="right" height="150" width="150">
                <div>
                    <h3>Mosassauro</h3>
                    <p>Significado do nome: “Lagarto do rio Meuse”
                        Habitat: Mares da Europa e América do Norte
                        Comprimento: 18m
                        Peso: 5.000 kg
                        Postura: Aquática
                        Dieta: Carnívoro
                        Idade: Cretáceo Superior, 70-66 milhões de anos atrás 
                        Description: Mosasaurus já governou os mares do Cretáceo. Um imenso lagarto marinho - 
                        e não um dinossauro de verdade - o Mosasaurus pode usar sua temível variedade de dentes 
                        para pegar peixes, pássaros e outros répteis marinhos -
                        até mesmo grandes tubarões brancos. 
                        Na verdade, o Mosassauro tem uma segunda dentição em seu palato superior 
                        que garante que qualquer presa que deslize por sua garganta não conseguirá escapar.</p>
                </div>
            </article>
    <a href="Mosassauro.php">Mosassauro.php</a>
</body>
</html>