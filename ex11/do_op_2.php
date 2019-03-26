#!/usr/bin/php
<?PHP
//sscanf lit des données dans la chaîne str, et l'interprète en fonction du format format

if ($argc == 2) 
{
    $arr = sscanf($argv[1], "%d %c %d %s");
    echo "$arr[0]\n";
    echo "$arr[1]\n";
	echo "$arr[2]\n";
	echo "$arr[3]\n";
    if (is_numeric($arr[0]) && $arr[1] && is_numeric($arr[2]) && !$arr[3]) 
    {
   	 switch ($arr[1]) 
   	 	{
       	 case "-":
            echo $arr[0] - $arr[2];
            break;
      	  case "+":
            echo $arr[0] + $arr[2];
            break;
       	 case "*":
            echo $arr[0] * $arr[2];
            break;
       	 case "/":
            echo $arr[0] / $arr[2];
            break;
      	  case "%":
            echo $arr[0] % $arr[2];
            break;
        }
        echo "\n";
    }
    else 
    {
    	echo "Syntax Error\n";
    }
}
else
    echo "Incorrect Parameters\n";


?>