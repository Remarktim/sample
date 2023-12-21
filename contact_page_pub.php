<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
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
        transform: scale(1.2);
      }

      #profile {
        width: 15em;
      }

      #profile_box {
        width: 45em;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid;
        padding: 1em 0 1em 0;
        border-radius: 2em 5em 2em ;
        transition: 1s;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }


      .info {
        margin-top: 1em;
        margin-left: 1em;
      }

      .form-control {
        background: transparent;
        border: 0;
      }

      .logout {
        position: absolute;
        left: 97%;
        bottom: 0;
        transform: translate(-50%, -50%);
      }
      #logout {
        background-color: #833e6b;
        border: 0;
        transition: 0.5s;
      }

      #logout:hover {
        color: rgb(255, 255, 255);
        transform: scale(1.1);
      }

      .text-center {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
      }

      h2, h3{
        color: white;
      }
    </style>
  </head>
  <body>
    <header
      class="container-fluid justify-content-center d-flex p-3 mb-2"
      id="forms">
      <div>
        <a class="btn mx-5" href="profile_page_pub.php">Profile</a>
      </div>

      <div>
        <a class="btn mx-5 active" href="contact_page_pub.php">Contact</a>
      </div>
    </header>
    <main>

        <h2 class="text-center">Contact Information</h2>
        <section id="profile_box" class="container mt-4 mb-5">
          <div class="info">
            <div class="form-control">
              <h3>Email: remarktimones415@.gmail.com</h3>
            </div>
            <div class="form-control">
              <h3>Contact Number: 09597214632</h3>
            </div>
        </section>
      </div>
    </main>

    <footer class="logout">
      <a id="logout" href="index.php" class="btn btn-secondary">Back</a>
    </footer>
  </body>
</html>
