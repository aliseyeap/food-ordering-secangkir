<?php 
require "../includes/header.php"; 
require "../config/config.php"; 
session_start();

if(!isset($_SESSION['user_id'])) {
    header("location: ".APPURL."");
    exit();
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = $conn->prepare("DELETE FROM cart WHERE id=:id");
    $delete->execute([":id" => $id]);

    echo "<script>
            alert('Item deleted successfully!');
            window.location.href = '../products/cart.php';
          </script>";
    exit();
}
?>
