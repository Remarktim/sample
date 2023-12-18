<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
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

        #profile {
          width: 15em;
        }

        main{
          width: 45em;
          display: flex;
          justify-content: center;
          position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
          border: 1px solid;
          padding: 1em 0 1em 0;
          border-radius: 1em 5em;
          opacity: .5;
          transition: 1s;
          
        }

        main:hover{
          opacity: 1;
        }
        .info{
          margin-top: 1em;
          margin-left: 1em;
        }

        .form-control{
          background: transparent;
          border: 0;
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
      <div>
        <a class="btn mx-5 active" href="profile_page.php">Profile</a>
      </div>

      <div>
        <a class="btn mx-5" href="contact_page.php">Contact</a>
      </div>
    </header>
    <main>
      <div class="text-center">
        <img
          class="img-fluid rounded-circle"
          id="profile"
          src="pictures/profile.jpg"
          alt="" />
      </div>
      <br />
      <div class="info">
        <div class="form-control">
          <h3>Name: Remark Timones</h3>
        </div>
        <div class="form-control">
          <h3>Age: 21</h3>
        </div>
        <div class="form-control">
          <h3>Gender: Male</h3>
        </div>
        <div class="form-control">
          <h3>Address: Puerto Princesa City</h3>
        </div>
      </div>
    </main>
    <div class="logout"> 
        <a href="logout.php" class="btn btn-secondary">logout</a>
      </div>
  </body>
</html>
