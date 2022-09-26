<?php
include 'ControllerSelect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon " href="logonav.png">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../fontawesome/css/all.css">
  <link rel="shortcut icon " href="logonav.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage students</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="container my-5">
    <nav class="navbar my-5">
      <button class="btn btn-primary" name="CSTU"><a href="ViewCreate.php" class="text-light">Add student</a></button>
      <form class="d-flex">
        <input class="form-control me-2 border-dark" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
    </nav>
    <table class="table caption-top">
      <caption>List of Students</caption>
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Username</th>
          <th scope="col">Password</th>
          <th scope="col">Center</th>
          <th scope="col">promo</th>
          <th scope="col">operations</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $sql = "select * from student";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $IdStudent = $row['IdStudent'];
            $NameStudent = $row['NameStudent'];
            $LastNameStudent = $row['LastNameStudent'];
            $UsernameS = $row['UsernameS'];
            $PasswordS = $row['PasswordS'];
            $Center = $row['Center'];
            $IdPromo = $row['IdPromo'];
            echo '    
        <tr>
        <th scope="row">' . $IdStudent . '</th>
        <td>' . $NameStudent . '</td>
        <td>' . $LastNameStudent . '</td>
        <td>' . $UsernameS . '</td>
        <td>' . $PasswordS . '</td>
        <td>' . $Center . '</td>
        <td>' . $IdPromo . '</td>
        <td>
        <button class="btn btn-primary" name="USTU"><a href="ViewUpdate.php?updateid=' . $IdStudent . '" class="text-light">Update</a></button> 
        <button class="btn btn-danger" name="DSTU"> <a href="ControllerDelete.php?deleteid=' . $IdStudent . '" class="text-light">Delete</a></button>
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