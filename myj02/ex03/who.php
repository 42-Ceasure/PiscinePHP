#!/usr/bin/php
<?php

$tab = file("/var/run/utmpx");

foreach ($tab as $lol)
{
	echo "$lol\n";
}

// foreach ($_ENV as $elem=>$val)
// {
//     echo "$val\n";
// }

?>