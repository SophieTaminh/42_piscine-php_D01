#!/usr/bin/php
<?PHP

$i = 2;
$k = $argv[1];
$tab = array();

while ($argv[$i])
{
    $tmp = explode(":", $argv[$i]);
    $tab[$tmp[0]] = $tmp[1];
    $i++;
}
if ($tab[$k] || $tab[$k] ==="0" || $tab[$k] === 0)
    echo "$tab[$k]\n";

?>