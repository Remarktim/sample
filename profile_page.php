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
        border-radius: 1em 5em;
        opacity: 0.5;
        transition: 1s;
      }

      #profile_box:hover {
        opacity: 1;
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

      #img {
        height: 20em;
        width: 45em;
        position: absolute;
        top: 60%;
        left: 25%;
        transform: translate(-50%, -50%);
      }

      #img1 {
        height: 20em;
        width: 45em;
        position: absolute;
        top: 60%;
        left: 75%;
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
      <section id="profile_box" class="container mt-4 mb-5">
        <div class="text-center">
          <img
            class="img-fluid rounded-circle"
            id="profile"
            src="pictures/profile.jpg"
            alt="" />
        </div>

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
      </section>
      <section id="img">
        <div
          id="carouselExampleAutoplaying"
          class="carousel slide"
          data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="pictures/3jpg.jpg"
                class="d-block w-100 rounded"
                alt="..." />
            </div>
            <div class="carousel-item">
              <img
                src="pictures/1.jpg"
                class="d-block w-100 rounded"
                alt="..." />
            </div>
            <div class="carousel-item rounded">
              <img
                src="pictures/2.jpg"
                class="d-block w-100 rounded"
                alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>

      <section id="img1">
        <div
          id="carouselExampleAutoplaying1"
          class="carousel slide"
          data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="pictures/3jpg.jpg"
                class="d-block w-100 rounded"
                alt="..." />
            </div>
            <div class="carousel-item">
              <img
                src="pictures/1.jpg"
                class="d-block w-100 rounded"
                alt="..." />
            </div>
            <div class="carousel-item">
              <img
                src="pictures/2.jpg"
                class="d-block w-100 rounded"
                alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleAutoplaying1"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleAutoplaying1"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
    </main>

    <footer class="logout">
      <a id="logout" href="logout.php" class="btn btn-secondary">logout</a>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
  </body>
</html>
