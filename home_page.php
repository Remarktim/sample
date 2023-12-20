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
   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous" />
      <style>
         body {
            scroll-behavior: smooth;
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
            height: 100vh;
            padding: 0;
            margin: 0;
         }

         header {
            border-bottom: 1px solid;
         }

         #forms div a {
            background-color: #826599;
            color: white;
            border-radius: 2em;
            padding: 10px 20px;
            transition: 0.6s;
            border: 0;
            text-decoration: none;
         }

         #forms div a:hover {
            background-color: #833e6b;
         }
         #left {
            width: 95.5vh;
         }

         #right {
            width: 96.3vh;
         }

         #left div {
            position: absolute;
            top: 40%;
            left: 25%;
            transform: translate(-50%, -50%);
            color: white;
         }

         #right #login {
            position: absolute;
            top: 40%;
            left: 70%;
            transform: translate(-50%, -50%);
            color: white;
         }

         #right #signup {
            position: absolute;
            top: 40%;
            left: 81%;
            transform: translate(-50%, -50%);
            color: white;
         }

         .hp{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
         }

         .logout{
            position: absolute;
            left: 97%;
            bottom: 0;
            transform: translate(-50%, -50%);
         }
      </style>
   
</head>
<body>
<header
      class="container-fluid justify-content-center d-flex p-3 mb-2"
      id="forms">
      <div class="active">
        <a class="btn mx-5" href="profile_page.php">Profile</a>
      </div>

      <div>
        <a class="btn mx-5" href="contact_page.php">Contact</a>
      </div>
</header>

<main>
   <div class="hp">
      <section class="text-center">
         <h1>Welcome! <span><?php echo $_SESSION['name'] ?></span></h1>
         <h1>Thank you for visiting us</h1>
      </section>
   </div>
   
   <div class="logout"> 
      <a href="logout.php" class="btn btn-secondary">logout</a>
   </div>   
</main>
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>



<script>
    history.pushState(null, null, null);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, null);
    });

    var typed = new Typed(".element", {
      strings: [<?php echo $_SESSION['name'] ?>],
      typeSpeed: 50,
      backSpeed: 50,
      backDelay: 1000,
      loop: true,
      });
</script>
</body>
</html>

