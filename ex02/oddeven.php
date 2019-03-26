#!/usr/bin/php
<?PHP

while(1)
{
	$saisie = "";

	//if ctrl_d, sortie
	//foreach pas ctrl-D recuperation de la saisie et traitement

	echo "Entrez un nombre: ";
	
	$line = trim(fgets(STDIN));
	if (feof(STDIN) == TRUE)
		exit();

	$saisie = $line;
	$calcul = $saisie;
	$calcul = substr($saisie,-2);

	if(is_numeric($saisie))
	{
		if ($calcul % 2 != 0 )
		{
			echo "Le chiffre ".$saisie." est Impair\n";
		}
		if ($calcul % 2 == 0 )
		{
			echo "Le chiffre ".$saisie." est Pair\n";
		}
	}
	else
	{
			echo "'".$saisie."'"." n'est pas un chiffre\n";
	}
}

?>