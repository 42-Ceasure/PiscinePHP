<?php
	$str = $_SERVER['REQUEST_URI'];
	$i = 20;
	while ($str[$i])
	{
		while ($str[$i])
		{
			if ($str[$i] == '=')
			{
				echo ": ";
				$i++;
			}
			echo $str[$i];
			$i++;
			if ($str[$i] == '&')
				break ;
		}
		echo "\n";
		$i++;
	}
?>