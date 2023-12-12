<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css" />
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

    <main class="container d-flex">
      <section class="container" id="left">
        <div>
          <h2>Hi, Welcome to my Website</h2>
        </div>
      </section>

      <section class="container" id="right">
        <div class="btn btn-secondary" id="login">
          <a class="btn mx-5" href="login_form.php">Log In</a>
        </div>
        <div class="btn btn-secondary" id="signup">
          <a class="btn mx-5" href="register_form.php">Sign Up</a>
        </div>
      </section>
    </main>

    <script>
      history.pushState(null, null, null);
      window.addEventListener("popstate", function () {
        history.pushState(null, null, null);
      });
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
  </body>
</html>
