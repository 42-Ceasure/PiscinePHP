<?PHP
class							NightsWatch
{
	public						$fighters;
	public function				recruit($newbie)
	{
		if (method_exists(get_class($newbie), "fight"))
			$this->fighters[] = $newbie;
	}
	public function				fight()
	{
		foreach ($this->fighters as $v)
			print($v->fight());
	}
}
?>

    Status API Training Shop Blog About Help 

