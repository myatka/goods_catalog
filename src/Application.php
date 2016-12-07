<?php
require "Router.php";

class Application
{
	public $link;

	protected $config;

	private static $instatnce = false;

	private function __construct(Array $config = [])
	{
		$this->config = $config;
		// $this->link = mysql_connect(HOST, USER, PASS); 
		// mysql_select_db(DBNAME, $this->link);
	}

	public function run()
	{
		self::getInstance();
		$router = new Router;
		$router->process();
		// $res = mysql_query("SELECT * FROM purchases;", $this->link);
		// if ($res == FALSE) {
		// 	echo mysql_error($this->link);
		// }
		// $row = mysql_fetch_assoc ( $res );
		// print_r($row);

	}

	public function getConfig()
	{
		return $this->config;
	}

	public function connectToDb()
	{
		$this->link = mysql_connect(
			$this->config["DB"]['host'],
			$this->config["DB"]['user'],
			$this->config["DB"]['pass']
		);

		mysql_select_db($this->config["DB"]['dbname'], $this->link);
	}

	/**
	 * @return Array() $res
	 */
	public function query($query)
	{
		$result = [];
		if (!$this->link) {
			$this->connectToDb();
		}
		$res = mysql_query($query, $this->link);
		while($row = mysql_fetch_assoc ( $res )) {
			$result[] = $row;
		}
		return $result;
	}

	public static function getInstance(Array $config = [])
	{
		if (!self::$instatnce) {
			self::$instatnce = new self($config);
		}
		return self::$instatnce;
	}

}