<?php
include 'ControllerSelect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon " href="logonav.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Pilots</title>
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
  <nav class="navbar my-5">
  <button class="btn btn-primary" name="CPIL" ><a href="ViewCreate.php" class="text-light">Add pilot</a></button>
      <form class="d-flex">
        <input class="form-control me-2 border-dark" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
</nav>
          <table class="table ">

  <thead class="table-dark"> 
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Center</th>
      <th scope="col">Company</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
    $sql="select * from Pilot";
    $result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $IdPilot=$row['IdPilot'];
        $NamePilot=$row['NamePilot'];
        $LastNamePilot=$row['LastNamePilot'];
        $UsernameP=$row['UsernameP'];
        $PasswordP=$row['PasswordP'];
        $center=$row['center'];
        $IdCompany=$row['IdCompany'];
        echo'    
        <tr>
        <th scope="row">'.$IdPilot.'</th>
        <td>'.$NamePilot.'</td>
        <td>'.$LastNamePilot.'</td>
        <td>'.$UsernameP.'</td>
        <td>'.$PasswordP.'</td>
        <td>'.$center.'</td>
        <td>'.$IdCompany.'</td>
        <td>
        <button class="btn btn-primary" name="UPIL"><a href="ViewUpdate.php?updateid='.$IdPilot.'" class="text-light">Update</a></button> 
        <button class="btn btn-danger" name="DPIL"> <a href="ControllerDelete.php?deleteid='.$IdPilot.'" class="text-light">Delete</a></button>
        </td>
      </tr>';
    }      
}
      ?>

     
  </tbody>
</table>
<button class="btn btn-primary" name="CREP"><a href="../gestion_login/Principale.php" class="text-light">Back</a></button>
  </div>  
</body>
<br><br><br><br><br><br><br>
<footer class="groupe13">
       <!-- Section: Text -->
          <section class="mb-4">
          </section>
          <!-- Section: Text -->

       
          <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container p-4">
              <!-- Section: Social media -->
              <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://m.facebook.com/ExiaAlgerie/?tsid=0.48710451097762164&source=result" role="button" target="_blank"
                  ><i class="fab fa-facebook-f"></i
                ></a>
          
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/exiacesialgerie/" role="button" target="_blank"
                  ><i class="fab fa-instagram"></i
                ></a>
          
                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/school/cesiecoledingenieurs/" role="button" target="_blank"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
          

              </section>
              <!-- Section: Social media -->
        
          
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Internshipy.com - Copyright: CESI EXIA © 2022 tous droits réservés.  
            <br>  Mentions légales | Licences et copyrights | Contact
        </div>
     
        <!-- Copyright -->
    </footer>
</html>
