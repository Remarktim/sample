<?php
@include 'connect.php';

session_start();

if(!isset($_SESSION['name'])){
   header('location:login_form.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
   <div class="content">
      <h1>welcome <span><?php echo $_SESSION['name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>
</div>
<script>
    history.pushState(null, null, null);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, null);
    });
</script>
</body>
</html>

