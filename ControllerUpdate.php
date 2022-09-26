<?php
include 'model.php';
$IdStudent = $_GET['updateid'];
$sql = "select * from student where IdStudent=$IdStudent";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$NameStudent = $row['NameStudent'];
$LastNameStudent = $row['LastNameStudent'];
$UsernameS = $row['UsernameS'];
$PasswordS = $row['PasswordS'];
$Center = $row['Center'];
$IdPromo = $row['IdPromo'];

if (isset($_POST['submit'])) {
    $NameStudent = $_POST['NameStudent'];
    $LastNameStudent = $_POST['LastNameStudent'];
    $UsernameS = $_POST['UsernameS'];
    $PasswordS = $_POST['PasswordS'];
    $Center = $_POST['Center'];
    $IdPromo = $_POST['IdPromo'];

    $sql = "UPDATE student set IdStudent=$IdStudent, NameStudent='$NameStudent', LastNameStudent='$LastNameStudent', UsernameS='$UsernameS', PasswordS='$PasswordS', Center=$Center, IdPromo=$IdPromo WHERE IdStudent=$IdStudent";
    $result = mysqli_query($con, $sql); {
        if ($result) {
            
            header('location:ViewSelect.php');
        } else {
            die(mysqli_error($con));
        }
    }
}
?>