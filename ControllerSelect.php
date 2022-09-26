<?php
include'model.php';
if(isset($_POST['submit'])){
    $NameStudent=$_POST['NameStudent'];
    $LastNameStudent=$_POST['LastNameStudent'];
    $UsernameS=$_POST['UsernameS'];
    $PasswordS=$_POST['PasswordS'];
    $Center=$_POST['Center'];
    $IdPromo=$_POST['IdPromo'];

    $sql="insert into student(NameStudent,LastNameStudent,UsernameS,PasswordS,Center,IdPromo)
    values('$NameStudent','$LastNameStudent','$UsernameS','$PasswordS','$Center','$IdPromo')";
    $result=mysqli_query($con,$sql);{
        if ($result) {

            header('location:ViewSelect.php');
        } else {
            die(mysqli_error($con));
        }
    }
}
?>
