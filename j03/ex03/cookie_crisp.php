<?PHP
	define ("SET", "2");
	define ("GET", "3");
	define ("DEL", "4");
	function get_action($array)
	{
		foreach ($array as $val)
		{
			if ($val == "set")
				return (SET);
			else if ($val == "get")
				return (GET);
			else if ($val == "del")
				return (DEL);
		}
		return (-1);
	}
	function check_action($array)
	{
		foreach ($array as $key => $val)
			if ($key == "action")
				return (TRUE);
		return (FALSE);
	}
	function check_name($array)
	{
		foreach ($array as $key => $val)
			if ($key == "name")
				return (TRUE);
		return (FALSE);
	}
	$expire = 365 * 60 * 60 * 24 * 60;
	$remove = -($expire * 9999);
	if (check_action($_GET))
	{
		if ((($action = get_action($_GET)) == SET) && check_name($_GET))
			setcookie($_GET["name"], $_GET["value"], time() + $expire);
		else if ($action == GET && check_name($_GET) === TRUE && $_COOKIE)
			echo $_COOKIE[$_GET["name"]]."\n";
		else if ($action == DEL && check_name($_GET))
			setcookie($_GET["name"], "", time() - $expire);
	}
?>