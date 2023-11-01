<?php
class inscription {
    // (A) CONSTRUCTOR - CONNECT TO DATABASE
    private $pdo; // pdo object
    private $stmt; // sql statement
    public $error; // error message
    private $_RSV;
    function __construct() {
        try {
          $this->pdo = new PDO(
              "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=" . DB_CHARSET,
              DB_USER, DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (Exception $ex) { 
          exit($ex->getMessage());
      }
    }
  
    // (B) DESTRUCTOR - CLOSE DATABASE CONNECTION
    function __destruct() {
      $this->pdo = null;
      $this->stmt = null;
    }
  
    // (D) SAVE RESERVATION
    function save ($email, $mdp) {
      
      try {
          $this->stmt = $this->pdo->prepare(
              "INSERT INTO admin (`email`, `mdp`) VALUES (?,?)",
              [$email, $mdp]
          );
          $this->stmt->execute([$email, $mdp]);
          return true;
      } catch (Exception $ex) {
          $this->error = $ex->getMessage();
          return false;
      }
    }
     
}
  
  // (F) DATABASE SETTINGS - CHANGE THESE TO YOUR OWN!
  define("DB_HOST", "localhost");
  define("DB_NAME", "flashtravel");
  define("DB_CHARSET", "utf8");
  define("DB_USER", "root");
  define("DB_PASSWORD", "");
  
  // (G) NEW RESERVATION OBJECT
  $_RSV = new inscription();
  

?>