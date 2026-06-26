<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title> boss.html </title>
		<link href="style.css" rel="stylesheet">
	</head>
		<body>
			 <?php echo"bonjour <strong> \"monsieur\" </strong>";?>
			 <p> 
				aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s');?>
			 </p>
			 <?php $bill=10;
				   $tank='boris';
				   $fry=3.5;
				   $stain=NULL;
				   $result=($bill+5)/$bill;
				   echo $result;
			?>
			<p> Je me nomme <?php echo $tank; ?> </p>
			<?php 
				$a=true; 
				if($a ===true ){
					echo "bienvenue";
				}
				else{ 
					echo "vous n'avez pas droit à l'acces"; 
				}
			?>
			<?php 
				$ben=true;
				$jerry=false; 
				$late=true; 
				
				if($ben&&$jerry){
					echo"vous n'avez que du chocolat";
				}
				else{
					echo "vous n'avez que des cookies";
				} 
			?>
			<br/>
			<?php 
				$note=9;
					if ($note ===5) {
						echo"mediocre";
					}
					elseif ($note ===9) {
						echo"assez bas";
					}
					elseif ($note ===10){
						echo"bas";
					}
					elseif ($note ===13) {
						echo"passable";
					}
					elseif ($note ===16) {
						echo"bien";
					}
					elseif ($note ===18) { 
						echo"tres bien";
					}
					elseif ($note===20){
						echo"excellent";
					}
					else { 
						echo"noteinvalide";
					}
					
				?> 
					
					<?php

		$school=8;
			switch($school) 
					{
						case 0:
							echo "double parcours";
						break;
						case 6:
							echo "prepa concours";
						break;
						case 7:
							echo "possibilites";
						break;
						case 8:
							echo "parcours en anglais";
						break; 
						default:
							echo "limites en resources";
					}
?>
                 <?php
						//premier utilisateur 
				        $userName1='mickael andrieu';
						$userEmail1='mickael.andrieu@exeple.com';
						$userpassword1='S3cr3t';
						$userAge1=34;
						
						//deuxieme utilisatrice
						$userName2='laurene castor';
						$userEmail2='laurene.castor@exemple.com';
						$userPassword2='P4ssW0rd';
						$userAge2=28;
						
						//troisieme utilisatrice
						$userName3='kimy blue';
						$userEmail3='kimy.blue@exemple.com';
						$userPassword3='loKs73';
						$useage=45;
						
						//quatrieme utilisateur
						$userName4='billy man';
						$userEmail4='billy.man@exemple.com';
						$userPassword4='s6st7';
						$userAge4=21;
				?>
				<?php
					$link=1;
						while($link<=100){
								echo 'etape n°'.$link. '<br/>' ;
							$link++;
						}
				
				?>
						
						<?php 
								$users = [ 
									[ 
										'full_name' => 'Mickaël Andrieu', 
										'email' => 'mickael.andrieu@exemple.com', 
										'age' => 34, 
									], 
									[ 
										'full_name' => 'Mathieu Nebra', 
										'email' => 'mathieu.nebra@exemple.com', 
										'age' => 34, 
									], 
									[ 
										'full_name' => 'Laurène Castor', 
										'email' => 'laurene.castor@exemple.com', 
										'age' => 28, 
									], 
								]; 
								$lines = 3; // nombre d'utilisateurs dans le tableau 
								$counter = 0; 
								for($lines=0;$lines<=2;$lines++){
									echo $users[$lines]['full_name']. ' ' .$users[$lines]['email'].'<br/>';
								}
						?>
						
						
				
		</body>
<html>
