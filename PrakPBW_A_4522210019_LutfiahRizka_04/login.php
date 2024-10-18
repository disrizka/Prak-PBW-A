<<<<<<< HEAD
<?php
session_start();
require_once 'controllers/AdminController.php';

$adminController = new AdminController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($adminController->login($username, $password)) {
        $_SESSION['admin'] = $username;
        header("Location: admin.php");
    } else {
        $error = "Username atau password salah!";
    }
}

include 'views/admin_login.php';

if (isset($error)) {
    echo "<p style='color:red;'>$error</p>";
}
?>

=======
<?php
session_start();
require_once 'controllers/AdminController.php';

$adminController = new AdminController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($adminController->login($username, $password)) {
        $_SESSION['admin'] = $username;
        header("Location: admin.php");
    } else {
        $error = "Username atau password salah!";
    }
}

include 'views/admin_login.php';

if (isset($error)) {
    echo "<p style='color:red;'>$error</p>";
}
?>

>>>>>>> b9535b9936cf7d10a6fbe1d24c437fc830c051f0
