<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
      $_SESSION['admin_name'] = $row['first_name'];
      header('location:admin_page.php');
     
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
   <style>
      body {
        background: linear-gradient(
          180deg,
          #5e62a1 10%,
          #8276a5 25%,
          #997fa7 35%,
          #b386a7 45%,
          #d288a5 60%,
          #f9a08f 80%,
          #feb573 100%
        );
      }
      h2 {
        text-align: center;
      }

      #form {
        background-color: #833E6B;
        color: white;
        border-radius: 2em;
        position: absolute;
        top: 50%;
        left: 50%;
        height: auto ;
        max-width: 25%;
        transform: translate(-50%, -50%);
        padding: 20px;
        transition: 0.6s;
        border: 0;
      }

      #form:hover {
        box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
      }

      #form input {
        margin-bottom: 10px; 
      }

      main {
        backdrop-filter: blur(10px);
      }

      input{
        cursor: pointer;
      }

      #submit{
        background-color: #826599;
      }
      .cols{
         color: white;
         text-decoration: none;
      }
   </style>
</head>
<body>
   
<div class="d-flex flex-column min-vh-100">
   <div class="row justify-content-center">
      <div class="form-control " id="form">
         <form action="" method="post" id="login" >
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
