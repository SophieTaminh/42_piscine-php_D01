#!/usr/bin/php
<?PHP

$liste = $argv[1];

$liste=trim($liste);				//supprime les espaces en debut et fin de chaine
$liste=preg_replace ('/\s\s+/' ,' ' ,$liste);	//remplace les espaces par un espace
$liste=explode( ' ', $liste ); 		// cree un tableau

$j=1;
while ($liste[$j])
{	
	echo "$liste[$j] ";
	$j++;	
}

if ($liste[0])
{
	echo "$liste[0]"."\n";
}
?>