<?PHP
class								Tyrion extends Lannister
{
	public function					sleepWith($with)
	{
		if (get_parent_class($with) === "Lannister")
			print("Not even if I'm drunk !\n");
		if (get_class($with) === "Sansa")
			print("Let's do this.\n");
	}
}
?>