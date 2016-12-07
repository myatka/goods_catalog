<?php
// $connect = require "../config/config.php";
// $link = mysql_connect('host', 'user', 'password');
// $select_db = mysql_select_db('dbname') or die("Не могу соединиться с БД");

class Goods
{
	
	function __construct()
	{
		# code...
	}

	public function showAll()
	{
		$goods = Application::getInstance()->query('SELECT * FROM goods');
		// var_dump($goods);
		echo '<table>';
		foreach ($goods as $key => $row) {
			echo '<tr>';
			foreach ($row as $column => $value) {
				echo "<td>$value</td>";
			}
			echo '</tr>';
		}
		echo '</table>';
		// $config = Application::config();
		// $query ="SELECT * FROM goods";
	}

	public function showOne()
	{
		
	}
}