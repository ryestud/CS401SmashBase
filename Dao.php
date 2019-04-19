


<?php
require_once 'KLogger.php';
class Dao extends mysqli {
    private $host = "us-cdbr-iron-east-03.cleardb.net"; 
    private $db = "heroku_73148d31f031b06"; 
    private $dsn = "mysql:host=us-cdbr-iron-east-03.cleardb.net;dbname=heroku_73148d31f031b06";
    private $user = "bcb55b6c6088fb";
    private $pass = "6cd8490d";
    public $con = "";
//    b7cb13a4
    function __construct(){
        $this->con = $this->connect($this->host,$this->user,$this->pass,$this->db);
    }
//    protected $logger;
    
//    public function __construct () {
//        $this->logger = new KLogger ( "log.txt" , KLogger::DEBUG );
//    }
//    $con = mysql_connect('us-cdbr-iron-east-03.cleardb.net','bcb55b6c6088fb','b7cb13a4','heroku_73148d31f031b06');
//    if (mysqli_connect_errno($this->$con)) 
//  { 
//  echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
//    } 
    
    
    public function getConnection () {

        try {

    
 $con = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       
    return $con;
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

        
  }
    
    public function getUser () {
        $con = $this->getConnection();
        $sqlret = $con->prepare("SELECT username, password FROM users");
        $sqlret->execute();
        $result = $sqlret->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
  }
    public function updateDB($style, $stock){
        if($_SESSION['loggedin'] == false){
            $conn = $this->getConnection();
            $updateQuery = "UPDATE users SET stock = $stock, style = $style WHERE id = 1"; 
            $q = $conn->prepare($updateQuery);
            $q->bindParam("style",$style);
            $q->bindParam("stock",$stock);
            $q->execute();
        }
    }
    public function getPref(){
        $con = $this->getConnection();
        $sqlret = $con->prepare("SELECT style, stock FROM users");
        $sqlret->execute();
        $result = $sqlret->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
//        return $con->query("SELECT style, stock FROM users", PDO::FETCH_ASSOC);
    }
}

        

?>