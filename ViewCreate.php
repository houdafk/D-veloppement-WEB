<?php
include'ControllerCreate.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon " href="logonav.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon " href="logonav.png">

    <title>Add Students</title>
</head>

<body>
    <div class="container my-5">
        <form method="post"  >
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="NameStudent" required>
            </div>

            <div class="form-group">
                <label>Lastname</label>
                <input type="text" class="form-control" placeholder="Enter Last name" name="LastNameStudent" required>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Enter a username" name="UsernameS" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter a password" name="PasswordS" required>
            </div>

            <div class="form-group">
                <label>Center</label>
                <select  name="Center" class="form-control" >
                    <option>Choose a center</option>
                    <option>Alger</option>
                    <option>Oran</option>
                </select>
            </div>
            <div class="form-group">
                <label>Promo</label>
                <select  name="IdPromo" class="form-control">
                    <option value="2">A1(Common core)</option>
                    <option value="1">A2(Web dev)</option>
                    <option value="3">A3(App dev)</option>
                    <option value="4">A4(Networking)</option>
                    <option value="5">A5(Data science)</option>
                </select>
            </div>

</br>
            <button id="1" type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</script>

</html>