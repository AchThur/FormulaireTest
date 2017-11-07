<doctype html> 
<html>
<head> 
	<title> Site internet </title>
</head>
<form method="GET" action="FormulaireReception.php" name="Formulaire"/>
	<body> 
		<?php 
		$nom=$_POST['name'];
		echo"mon nom est : ",$nom;
		$mail=$_POST['email'];
		echo"mon adresse est :",$mail;



		?>
	</body>
</html>