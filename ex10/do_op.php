#!/usr/bin/php
<?PHP
//il faut utiliser la fonction epur_str pour eliminer les blancs
if ($argc != 4)
{
	echo "Incorrect Parameters\n";
}
	$i=1;
	while ($i < 4)
	{
		$argv[$i]=trim($argv[$i]);				//supprime les espaces en debut et fin de chaine
		$argv[$i]=preg_replace ('/\s\s+/' ,' ' ,$argv[$i]);	//remplace les espaces par un espace
		
		$i++;
	}

if ($argc == 4)
{
	if($argv[2] == '+')
		$result = $argv[1] + $argv[3];
	if($argv[2] == '-')
		$result = $argv[1] - $argv[3];
	if($argv[2] == '*')
		$result = $argv[1] * $argv[3];
	if($argv[2] == '/')
		$result = $argv[1] / $argv[3];
	if($argv[2] == '%')
		$result = $argv[1] % $argv[3];
	echo "$result\n";
}

?>