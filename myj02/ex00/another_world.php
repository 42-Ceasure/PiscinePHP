#!/usr/bin/php
<?php
if ($argc > 1)
{
	$line = trim($argv[1]);
	$tab = preg_split("/[\s,]+/", $line);
	$i = 0;
	while ($tab[$i])
	{
		echo "$tab[$i]";
		if ($tab[$i + 1] == '')
			break ;
		echo " ";
		$i++;
	}
	echo "\n";
}
?>