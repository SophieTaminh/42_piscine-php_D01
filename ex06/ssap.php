#!/usr/bin/php
<?PHP

$i=0;
foreach($argv as $elem)
{	
	if ($elem != $argv[0])
	{	
		$elem=trim($elem);				//supprime les espaces en debut et fin de chaine
		$elem=preg_replace ('/\s\s+/' ,' ' ,$elem);	//remplace les espaces par un espace
		$elem=explode( ' ', $elem ); 		// cree un tableau
		$j=0;
		while ($elem[$j])
		{	
			$mot[$i]=$elem[$j];
			$j++;
			$i++;
		}
	}
}
if ($mot)
{
sort($mot,SORT_STRING);
}
$j=0;
while ($mot[$j])
{	
	echo "$mot[$j]"."\n";
	$j++;
}
?>