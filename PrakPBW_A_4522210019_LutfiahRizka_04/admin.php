<<<<<<< HEAD
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

require_once 'controllers/GuestController.php';

$guestController = new GuestController();

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $guestController->delete($id);
    header("Location: admin.php");
}

$guests = $guestController->readAll();

include 'views/admin_dashboard.php';
?>

=======
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

require_once 'controllers/GuestController.php';

$guestController = new GuestController();

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $guestController->delete($id);
    header("Location: admin.php");
}

$guests = $guestController->readAll();

include 'views/admin_dashboard.php';
?>

>>>>>>> b9535b9936cf7d10a6fbe1d24c437fc830c051f0
