<?PHP
function ft_is_sort($tab)
{	
	$tab1=$tab;
	sort($tab1,SORT_STRING);
	
	if ($tab1==$tab)
	{
		return (TRUE);
	}
	return (FALSE);
}

?>