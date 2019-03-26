<?PHP
function ft_split($liste)
{
	$liste=trim($liste);				//supprime les espaces en debut et fin de chaine
	$liste=preg_replace ('/\s\s+/' ,' ' ,$liste);	//remplace les espaces par un espace
	$liste=explode( ' ', $liste ); 		// cree un tableau
	sort($liste, SORT_STRING);					// trie le tableau		
	return ($liste);
}

?>