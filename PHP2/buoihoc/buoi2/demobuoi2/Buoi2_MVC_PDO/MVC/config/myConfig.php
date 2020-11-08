<?php  
	/**
	 * 
	 */
	// class Connect
	// {
	// 	private const host   = 'localhost';
	// 	private const user   = 'root';
	// 	private const pass   = '';
	// 	private const db     = 'php0720e2_itplus';
	// 	protected $conn 	 = null;

	// 	function __construct(){
	// 		$this->conn = mysqli_connect(self::host, self::user, self::pass, self::db) or die("Can't connect database!") ;
	// 		if ($this->conn) {
	// 			mysqli_set_charset($this->conn, 'utf8');
	// 		}else{
	// 			echo "Can't connect database!";
	// 		}
	// 	}
	// }

	/**
	 * 
	 */
	class Connect
	{
		private const dns = 'mysql:host=localhost;dbname=php0720e2_itplus';
		private const user = 'root';
		private const pass = '';
		protected $pdo = null;

		function __construct()
		{
			try {
				$this->pdo = new PDO(self::dns, self::user, self::pass);
				$this->pdo->query("SET NAMES utf8");
			} catch (PDOException $e) {
				echo $e->getMessage();
				exit();
			}
		}
	}

?>