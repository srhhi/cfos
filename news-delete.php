<?php

session_start();

if(isset($_POST['deleteById'])) {
	$newsId = $_POST["deleteById"];
    include 'backend/dbcon.php';

    $query = "DELETE FROM newss WHERE news_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $newsId);
    $stmt->execute();
    $stmt->close();

    $conn->close();

    header("Location: news-view.php");
    echo "<script>alert('News successfully deleted');</script>";
    exit();
}
?>