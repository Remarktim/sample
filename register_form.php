<?php
@include 'config.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'User already exists!';
    } else {
        if ($pass != $cpass) {
            $error[] = 'Passwords do not match!';
        } else {
            $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
            mysqli_query($conn, $insert);
            header('location: login_form.php');
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Form</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container mt-5">
   <div class="row justify-content-center">
      <div class="col-md-6">
         <form action="" method="post" class="bg-light p-4 rounded">
            <h3 class="text-center mb-4">Register Now</h3>
            <?php
            if (isset($error)) {
               foreach ($error as $error) {
                  echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
               }
            }
            ?>
            <div class="mb-3">
               <label for="name" class="form-label">Name</label>
               <input type="text" name="name" class="form-control" required placeholder="Enter your name">
            </div>
            <div class="mb-3">
               <label for="email" class="form-label">Email</label>
               <input type="email" name="email" class="form-control" required placeholder="Enter your email">
            </div>
            <div class="mb-3">
               <label for="password" class="form-label">Password</label>
               <input type="password" name="password" class="form-control" required placeholder="Enter your password">
            </div>
            <div class="mb-3">
               <label for="cpassword" class="form-label">Confirm Password</label>
               <input type="password" name="cpassword" class="form-control" required placeholder="Confirm your password">
            </div>
            <div class="mb-3">
               <label for="user_type" class="form-label">User Type</label>
               <select name="user_type" class="form-select">
                  <option value="user">User</option>
                  <option value="admin">Admin</option>
               </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Register Now</button>
            <p class="mt-3">Already have an account? <a href="login_form.php">Login now</a></p>
         </form>
      </div>
   </div>
</div>

<!-- Bootstrap JS and dependencies (if needed) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
