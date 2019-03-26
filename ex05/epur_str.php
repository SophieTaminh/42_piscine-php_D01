#!/usr/bin/php
<?PHP

$texte = $argv[1];

$texte=trim($texte);//supprime les espaces en debut et fin de chaine
$i = 0;

while ($texte[$i])
{	
	while($texte[$i] == ' ' && $texte[$i + 1] == ' ')
		$i++;
	echo "$texte[$i]";
	$i++;
}

if ($i >0)
{
echo "\n";
}
?>