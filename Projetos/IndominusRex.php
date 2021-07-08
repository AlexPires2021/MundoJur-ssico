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
                <img src="https://i.pinimg.com/originals/c2/19/77/c21977187f13a3db4ad6cfba892cefc8.jpg" align="left" height="150" width="150">
                <div>
                    <h3>Indominus Rex</h3>
                    <p>Significado do nome: Rei Feroz ou Indomável
                        Habitat: Jurassic World
                        Comprimento: Atualmente 12m
                        Peso: TBD
                        Origem: Hammond Creation Lab
                        Nosso objetivo era fazer de Indominus o dinossauro mais temível já exibido no Jurassic World. Os engenheiros genéticos do nosso Hammond Creation Lab mais do que entregaram.
                        À primeira vista, Indominus se parece muito com um T. rex. Mas sua ornamentação de cabeça distinta e 
                        osteodermos ósseos ultra-resistentes podem ser rastreados a partir dos terópodes conhecidos como 
                        Abelisauros. Os chifres de Indominus foram colocados acima da órbita do olho por meio de material 
                        genético hibridizado de Carnotaurus, Majungasaurus, Rugops e Giganotosaurus. 
                        Temível mesmo.
                        O rugido do Indominus é estimado em 140-160db - o mesmo que um 747 decolando e pousando. 
                        E pode atingir velocidades de 50 km / h … enquanto confinado ao seu gabinete. </p>
                </div>
            </article>
    <a href="/dinosaurs/indominus-rex/">/dinosaurs/indominus-rex/</a>
</body>
</html>