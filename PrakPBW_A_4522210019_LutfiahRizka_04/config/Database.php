<<<<<<< HEAD
<?php
class Database {
    private $host = "localhost";
    private $db_name = "perpustakaan_digital";
    private $username = "root";
    private $password = "admin123";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" .$this->host. ";dbname=" .$this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Koneksi error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
=======
<?php
class Database {
    private $host = "localhost";
    private $db_name = "buku_tamu";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" .$this->host. ";dbname=" .$this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Koneksi error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>

>>>>>>> b9535b9936cf7d10a6fbe1d24c437fc830c051f0
