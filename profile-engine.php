<?php
session_start();

if (isset($_POST['save'])) {
    extract($_POST);
    include 'backend/dbcon.php';

    $id = $_SESSION["admin_id"];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // Validate input fields
    if (!empty($name) && !empty($email) && !empty($mobile) && !empty($password)) {
        $sql = "UPDATE admins SET admin_name = '$name', admin_email = '$email', admin_mobile = '$mobile', admin_password = '$password' WHERE admin_id='$id'";

        if ($conn->query($sql) === TRUE) {
            header("Location: profile-view.php");
            echo "<script>alert('Profile successfully updated');</script>";
            exit();
        } else {
            echo "Error updating profile record: " ;
        }
    } else {
        echo "<script>alert('Please fill in all fields');</script>";
    }
}
$conn->close();
?>