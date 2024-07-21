<?php
require 'koneksi.php';
$arrival = $_POST["arrival"];
$date = $_POST["date"];
$adults = $_POST["adults"];
$room = $_POST["room"];


$query_sql = "INSERT INTO book_users (arrival, date, adults, room) 
            VALUES ('$arrival', '$date', '$adults', '$room')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: dashboard.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
