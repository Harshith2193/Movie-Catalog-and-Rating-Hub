<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
      background-image: url(
        'https://media.istockphoto.com/id/1348169049/photo/dark-street-asphalt-abstract-dark-blue-background.webp?b=1&s=170667a&w=0&k=20&c=IYrzRv-UWEZVfxlZW6JZndqJKzmg83aFMVxNkoQ4bfk=');
      background-repeat: repeat;
      background-size: cover;
    }

    .card {
      opacity: 0.7;
      background-color: rgba(255, 255, 255, 0.814);
      transition: opacity 0.4s ease;
    }

    .card:hover {
      opacity: 0.9;
    }

    .photo-container {
      overflow-x: hidden;
      white-space: nowrap;
    }

    .photo-container img {
      width: 100%;
      height: auto;
      margin-right: 10px;
      border-radius: 1rem 0 0 1rem;
    }
  </style>
</head>

<body>



<?php
  // Start the session to persist user login status
  session_start();

  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Database connection
      $servername = "localhost:3306";
      $username = "root";
      $password = "";
      $dbname = "movie_database";

      $conn = mysqli_connect($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Get user input from the form
      $input_username = mysqli_real_escape_string($conn, $_POST['username']);
      $input_password = mysqli_real_escape_string($conn, $_POST['password']);

      // Check if the entered username and password are for the admin
      if ($input_username == "admin" && $input_password == "admin101") {
          // Admin user, set session variables and redirect to admin.php
          $_SESSION['username'] = $input_username;
          header("Location: Act_Dir_Gen_Lan.php");
          exit(); // Ensure no further code execution after redirect
      } else {
          // Query to check if the user exists in the signup table
          $sql = "SELECT * FROM signup WHERE username='$input_username' AND password='$input_password'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // Regular user, redirect to Act_Dir_Gen_Lan.php
              $_SESSION['username'] = $input_username;
              header("Location: Act_Dir_Gen_Lan.php");
              exit();
          } else {
              // User doesn't exist, show an error message
              echo "Invalid username or password. Please try again.";
          }
      }

      // Close the database connection
      $conn->close();
  }
?>


  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <div class="photo-container" id="slideshow">
                <img src="https://images-cdn.ubuy.co.in/6345f652ec87e81aa558cd24-ubuy-online-shopping.jpg" alt="Image 1">
                <img src="https://m.media-amazon.com/images/I/51WYsbIa7TS._AC_UF1000,1000_QL80_.jpg" alt="Image 2">
                <img src="https://m.media-amazon.com/images/I/71niXI3lxlL._AC_UF1000,1000_QL80_.jpg" alt="Image 3">
                <img src="https://m.media-amazon.com/images/I/8105Oc1+FPL.jpg" alt="Image 4">
                <img src="https://m.media-amazon.com/images/I/814E2+pjjzL._AC_UF894,1000_QL80_.jpg" alt="Image 5">
                <img src="https://m.media-amazon.com/images/I/71kUTilIdiL.jpg" alt="Image 6">
                <img src="https://m.media-amazon.com/images/M/MV5BOWNkMWQ3MDEtYjQ3Zi00Y2NhLWE1NzYtZGJkM2NlYWY3OWFmXkEyXkFqcGdeQXVyNDY5MTUyNjU@._V1_.jpg" alt="Image 7">
                <img src="https://m.media-amazon.com/images/M/MV5BMTQ5NjQ0NDI3NF5BMl5BanBnXkFtZTcwNDI0MjEzMw@@._V1_.jpg" alt="Image 8">
                <img src="https://m.media-amazon.com/images/I/71DwIcSgFcS.jpg" alt="Image 9">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/69130849302425.58b072412174d.jpg" alt="Image 10">
                <img src="https://m.media-amazon.com/images/I/81CLFQwU-WL.jpg" alt="Image 11">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/24623b111384271.6000a082a190a.png" alt="Image 12">
                <img src="https://m.media-amazon.com/images/M/MV5BNGVkOTlhOTktNjZiNS00NDg3LWIxMDAtZTY5Y2E0YjllN2IxXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg" alt="Image 13">
                <img src="https://m.media-amazon.com/images/I/71RrfxJosrL._AC_UF1000,1000_QL80_.jpg" alt="Image 14">
                <img src="https://m.media-amazon.com/images/I/71Rk+PgKToL._AC_UF1000,1000_QL80_.jpg" alt="Image 15">
                  <!-- Add your images here -->
                </div>
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  <form name="f1" action="" method="POST" onsubmit="return validation()">
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fa-solid fa-clapperboard fa-2xl me-3" style="color: #6bae97;"></i>
                      <span class="h1 fw-bold mb-0">MOVIE DATABASE</span>
                    </div>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;color: #398147" >Sign into your account</h5>
                    <div class="form-outline mb-4 ">
                      <input type="text" name="username" id="form2Example17" class="form-control form-control-lg" placeholder="Username"/>
                      <label class="form-label" for="form2Example17" ></label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="password" name="password" id="form2Example27"
                        class="form-control form-control-lg" placeholder="Password" />
                      <label class="form-label" for="form2Example27" ></label>
                    </div>
                    <div class="pt-1 mb-4">
                      <center><button class="btn btn-dark btn-lg btn-block" type="submit">Login</button></center>
                    </div><center>

                      <p class="mb-5 pb-lg-2" style="color: #39814c;">Don't have an account? <a
                          href="signup_page.php" style="color: #398147;">Register here</a></p>
                  </form></center>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    // JavaScript for automatic image slideshow
    var currentIndex = 0;
    var images = document.getElementById('slideshow').getElementsByTagName('img');

    function showImage(index) {
      for (var i = 0; i < images.length; i++) {
        images[i].style.display = 'none';
      }
      images[index].style.display = 'block';
    }

    function nextImage() {
      currentIndex = (currentIndex + 1) % images.length;
      showImage(currentIndex);
    }

    // Set interval for automatic image change (every 3 seconds in this example)
    setInterval(nextImage, 3000);

    // Display the first image initially
    showImage(currentIndex);

    function validation() {
      var id = document.f1.username.value;
      var ps = document.f1.password.value;
      if (id.length == "" && ps.length == "") {
        alert("Username and Password fields are empty");
        return false;
      } else {
        if (id.length == "") {
          alert("Username is empty");
          return false;
        }
        if (ps.length == "") {
          alert("Password field is empty");
          return false;
        }
      }
    }
  </script>
</body>

</html>