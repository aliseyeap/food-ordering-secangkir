<?php 
require "includes/header.php"; 
require "config/config.php"; 
session_start();

if(isset($_POST['submit'])) {
    if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['date']) ||
       empty($_POST['time']) || empty($_POST['phone']) || empty($_POST['message'])) {
        
        echo "<script>alert('One or more fields are empty. Please fill out all fields.'); window.history.back();</script>";
        exit();
    } 

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $date = $_POST['date']; // Expected format: YYYY-MM-DD
    $time = $_POST['time'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $user_id = $_SESSION['user_id'];
    $status = "Pending"; // Default status
    $created_at = date('Y-m-d H:i:s'); // Capture current timestamp

    // Convert input date to timestamp for comparison
    if(strtotime($date) > strtotime(date("Y-m-d"))) { 
        $insert = $conn->prepare("INSERT INTO bookings (first_name, last_name, date, time, phone, message, status, user_id, created_at) 
                                  VALUES (:first_name, :last_name, :date, :time, :phone, :message, :status, :user_id, :created_at)");

        $insert->execute([
            ":first_name" => $first_name,
            ":last_name" => $last_name,
            ":date" => $date,
            ":time" => $time,
            ":phone" => $phone,
            ":message" => $message,
            ":status" => $status,
            ":user_id" => $user_id,
            ":created_at" => $created_at
        ]);

        echo "<script>alert('Booking is done!'); window.location.href='../coffee-blend/users/bookings.php';</script>";
        exit();
    } else {
        echo "<script>alert('Invalid date. Please select a future date.'); window.history.back();</script>";
    }
}
?>
