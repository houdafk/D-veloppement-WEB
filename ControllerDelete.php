<?php
include('model.php');
if(isset($_GET['deleteid'])){
    $IdStudent=$_GET['deleteid'];
    $sql="delete from student where IdStudent=$IdStudent";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo"Deleted successfully";
        header('location:ViewSelect.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>