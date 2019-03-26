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

$j=0;
$s=0;
$n=0;
$a=0;
while ($mot[$j])
{	
	if(ctype_alpha($mot[$j]))
	{	
		$string[$s]=$mot[$j];
		$s++;
	}
	else
	{	
		if(ctype_alnum($mot[$j]))
		{
			$num[$n]=$mot[$j];
		$n++;
		}
		else
		{	
			$ascii[$a]=$mot[$j];
			$a++;
		}
	}
	$j++;
}

if ($string)
{
sort($string,SORT_STRING | SORT_FLAG_CASE);
}

if ($num)
{
sort($num,SORT_STRING);
}

if ($ascii)
{
sort($ascii,SORT_STRING);
}

$s=0;
$n=0;
$a=0;
while ($string[$s])
{	
	echo "$string[$s]"."\n";
	$s++;
}
while ($num[$n])
{	
	echo "$num[$n]"."\n";
	$n++;
}
while ($ascii[$a])
{	
	echo "$ascii[$a]"."\n";
	$a++;
}

?>