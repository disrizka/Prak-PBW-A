<<<<<<< HEAD
<?php
require_once 'controllers/GuestController.php';

$guestController = new GuestController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $guestController->create($name, $comment);
    header("Location: index.php");
}

$guests = $guestController->readAll();

include 'views/guest_form.php';
include 'views/guest_list.php';
?>

=======
<?php
require_once 'controllers/GuestController.php';

$guestController = new GuestController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $guestController->create($name, $comment);
    header("Location: index.php");
}

$guests = $guestController->readAll();

include 'views/guest_form.php';
include 'views/guest_list.php';
?>

>>>>>>> b9535b9936cf7d10a6fbe1d24c437fc830c051f0
