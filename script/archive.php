<?php
	$mail = $_POST['mail'];
	$nome = $_POST['nome'];
	$testo = $_POST['testo'];
mail("ndrbarone@gmail.com", "Mail da".$nome , "Mail: ".$mail."\nTesto: \n\n".$testo);

header("location: http://www.kauloniatarantellafestival.it/grazie.html");
?>