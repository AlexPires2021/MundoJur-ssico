<?php
    // Galeria.php
    
	include( 'fotosBD.php' );
	$fotos = getFotos();

	// Testa se existe o cookie 'user'
	if( isset( $_COOKIE['user'] ) )
	{
		$username = $_COOKIE['user'];
		$likes = getLikes( $username );
	}
	else
		$likes = [];	
        
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Galeria de fotos</title>
	<!-- COLOCAR AQUI O <script> do Font Awesome -->
	<script src="https://kit.fontawesome.com/47767be94f.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="fotos.css" >
</head>
<body>

	<header>
		<h1>Galeria de fotos</h1>
		<?php 
			if( !empty($username) ):		
				echo <<<USER
					<div id="logout">
						<span>$username</span>
						<a href="logout.php">logout</a>
					</div>	
USER;
			else:
		?>		
				<form id="login" action="login.php" method="post">
					<input type="text" name="username" placeholder="username">
					<input type="submit" value="Login">
				</form>
		<?php endif; ?>	
	</header>	

	<section>
        
        <?php
            foreach ($fotos as $foto):
        ?>

		<div class="foto">
			<img src="<?php echo $foto['url']; ?>">
    	
			<form method="post" action="likeDislike.php">
				<input type="hidden" name="fotoId" 
					   value="<?php echo $foto['id']; ?>" >
				
				<?php 
					if( ! in_array( $foto['id'], $likes ) ) :
				?>
						<button type="submit" name="opLike" value="Like">
							<i class="fas fa-thumbs-up"></i>
						</button>
				<?php
					else: 
				?>	
						<button type="submit" name="opLike" value="disLike">
							<i class="fas fa-thumbs-down"></i>
						</button>
						<i class="fas fa-heart"></i>
				<?php endif; ?>		

			</form>
			
		</div>
        
        <?php endforeach; ?>
				
	</section>

</body>
</html>