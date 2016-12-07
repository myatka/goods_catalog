<?php
/**
* 
*/
class Purchases
{
	
	function __construct()
	{
		# code...
	}
	
	public function all()
	{
		$purchases = Application::getInstance()->query('SELECT * FROM purchases');

		echo '<table border="1">';
		foreach ($purchases as $key => $row) {
			echo '<tr>';
			foreach ($row as $column => $value) {
				echo "<td>$value</td>";
			}
			echo '</tr>';
		}
		echo '</table>';
	}
	
	public function one()
	{

	}
}