<?php
session_start();

if(isset($_POST['save']))
{
    extract($_POST);
    include 'backend/dbcon.php';

	$id = $_POST["byId"];
    $newsDate = $_POST['newsDate'];
	$author = $_POST['author'];
	$title = $_POST['title'];
	$link = $_POST['link'];

		$sql = "UPDATE newss SET news_date = '$newsDate', news_author = '$author', news_title = '$title', news_link = '$link' WHERE news_id = '$id'";
		$stmt = $conn->prepare($sql);
		
		$stmt->bind_param("ssdisi", $newsDate, $author, $title, $link, $id);

		if ($stmt->execute()) {
			
			echo "<script>alert('News successfully updated');</script>";
			header("Location: news-view.php");
			exit;
		}
	$conn->close();
}
else if(isset($_POST['add'])) {

    include 'backend/dbcon.php';

    $newsDate = $_POST['newsDate'];
    $author = $_POST['author'];
    $title = $_POST['title'];
    $link = $_POST['link'];

	$sql = "INSERT INTO newss (news_date, news_author, news_title, news_link) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ssss", $newsDate, $author, $title, $link);

		if ($stmt->execute()) {
			
			header("Location: news-view.php");
			echo "<script>alert('News successfully added');</script>";
			exit;
		}
	$conn->close();
}
?>