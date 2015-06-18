#!/usr/bin/php
<?php
function			ft_check_month($s)
{
	if (strstr($s, "janvier") != NULL || strstr($s, "Janvier") != NULL)
		return 1;
	if (strstr($s, "fevrier") != NULL || strstr($s, "Fevrier") != NULL)
		return 2;
	if (strstr($s, "mars") != NULL || strstr($s, "Mars") != NULL)
		return 3;
	if (strstr($s, "avril") != NULL || strstr($s, "Avril") != NULL)
		return 4;
	if (strstr($s, "mai") != NULL || strstr($s, "Mai") != NULL)
		return 5;
	if (strstr($s, "juin") != NULL || strstr($s, "Juin") != NULL)
		return 6;
	if (strstr($s, "juillet") != NULL || strstr($s, "Juillet") != NULL)
		return 7;
	if (strstr($s, "aout") != NULL || strstr($s, "Aout") != NULL)
		return 8;
	if (strstr($s, "septembre") != NULL || strstr($s, "Septembre") != NULL)
		return 9;
	if (strstr($s, "octobre") != NULL || strstr($s, "Octobre") != NULL)
		return 10;
	if (strstr($s, "novembre") != NULL || strstr($s, "Novembre") != NULL)
		return 11;
	if (strstr($s, "decembre") != NULL || strstr($s, "Decembre") != NULL)
		return 12;
	return 0;
}
function			ft_check_day($s)
{
	if (strstr($s, "lundi") != NULL || strstr($s, "Lundi") != NULL)
		return 1;
	if (strstr($s, "mardi") != NULL || strstr($s, "Mardi") != NULL)
		return 1;
	if (strstr($s, "mercredi") != NULL || strstr($s, "Mercredi") != NULL)
		return 1;
	if (strstr($s, "jeudi") != NULL || strstr($s, "Jeudi") != NULL)
		return 1;
	if (strstr($s, "vendredi") != NULL || strstr($s, "Vendredi") != NULL)
		return 1;
	if (strstr($s, "samedi") != NULL || strstr($s, "Samedi") != NULL)
		return 1;
	if (strstr($s, "dimanche") != NULL || strstr($s, "Dimanche"))
		return 1;
	return 0;
}
if ($argc == 1)
	return 0;
	date_default_timezone_set('Europe/Paris');
	$tab = str_replace(':' , ' ', $argv[1]);
	$split = explode(' ', $tab);
	if (ft_check_month($split[2]) == 0 || ft_check_day($split[0]) == 0 || count($split) != 7)
	{
		echo "Wrong Format\n";
		return 0;
	}
	echo mktime($split[4], $split[5], $split[6], ft_check_month($split[2]), $split[1], $split[3]);
	echo "\n";
?>