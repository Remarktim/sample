<?php
@include 'connect.php';

session_start();

if (isset($_POST['submit'])) {
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
      $_SESSION['name'] = $row['first_name'];
      header('location:home_page.php');
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>
   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous" />
      <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="d-flex flex-column min-vh-100">
   <div class="row justify-content-center">
      <div class="form-control " id="form">
         <form action="" method="post" id="login">
            <h3 class="text-center mb-4">Login Now</h3>

            <?php
            if(isset($error)){
               foreach($error as $error){
                  echo '<div class="alert alert-danger form-label" id="error">'.$error.'</div>';
               }
            }
            ?>

         <div class="mb-3 position-relative">
            <div>
               <label for="email" class="form-label">Username/Email</label>
            <input
               type="text"
               name="email"
               id="email"
               required
               maxlength="43"
               class="form-control form-control-lg" />
            </div>
          <div class="valid-feedback">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input
            type="password"
            name="password"
            id="password"
            required
            class="form-control form-control-lg" />
        </div>
        <div class="d-flex justify-content-center">
          <input
            type="submit"
            value="Login"
            name="submit"
            class="btn  btn-lg"
            id="submit" 
            />
         </div >
            <p class=" text-center mb-1 mt-3" id="cols">Don't have an account? <a href="register_form.php" class="cols">Register Now</a></p>
         </form>
      </div>
   </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
