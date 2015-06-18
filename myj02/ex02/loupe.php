#!/usr/bin/php
<?php
function		loupe($str, $c, $i)
{
	$result = 0;
	while ($str[$i])
	{
		if ($str[$i] == $c)
			return $result;
		$result++;
		$i++;
	}
	return 0;
}
	$tab = file($argv[1]);
	$c = '"';
	$b = '<';
	$d = '>';
	foreach ($tab as $str)
	{
		$i = 0;
		while ($str[$i])
		{
			if ($str[$i] == $c)
			{
				$i++;
				echo $c;
				echo strtoupper(substr($str, $i, loupe($str, $c, $i)));
				echo $c;
				$i += loupe($str, $c, $i);
			}
			else if ($str[$i] == 'i' && $str[$i + 1] == 'm' && $str[$i + 2] == 'g')
			{
				while ($str[$i])
				{
					if ($str[$i] == $c)
					{
						$i++;
						echo $c;
						echo strtoupper(substr($str, $i, loupe($str, $c, $i)));
						echo $c;
						$i += loupe($str, $c, $i);
					}
					else if ($str[$i] == $d)
					{
						$i++;
						echo $d;
						echo strtoupper(substr($str, $i, loupe($str, $b, $i)));
						echo $b;
						$i += loupe($str, $b, $i);
						break ;
					}
					else
						echo $str[$i];
					$i++;
				}
			}
			else if ($str[$i] == '<' && $str[$i + 1] == 'a')
			{
				while ($str[$i])
				{
					if ($str[$i] == $c)
					{
						$i++;
						echo $c;
						echo strtoupper(substr($str, $i, loupe($str, $c, $i)));
						echo $c;
						$i += loupe($str, $c, $i);
					}
					else if ($str[$i] == $d)
					{
						$i++;
						echo $d;
						echo strtoupper(substr($str, $i, loupe($str, $b, $i)));
						echo $b;
						$i += loupe($str, $b, $i);
						break ;
					}
					else
						echo $str[$i];
					$i++;
				}
			}
			else
				echo $str[$i];
			$i++;
		}
	}
?>