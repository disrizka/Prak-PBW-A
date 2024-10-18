<<<<<<< HEAD
<?php
include_once './config/Database.php';
include_once './models/Admin.php';

class AdminController {
    private $admin;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->admin = new Admin($db);
    }

    // Fungsi untuk login
    public function login($username, $password) {
        $this->admin->username = $username;
        $this->admin->password = $password;
        return $this->admin->login();
    }
}
?>

=======
<?php
include_once '../config/Database.php';
include_once '../models/Admin.php';

class AdminController {
    private $admin;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->admin = new Admin($db);
    }

    // Fungsi untuk login
    public function login($username, $password) {
        $this->admin->username = $username;
        $this->admin->password = $password;
        return $this->admin->login();
    }
}
?>

>>>>>>> b9535b9936cf7d10a6fbe1d24c437fc830c051f0
