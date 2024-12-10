<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie Database Homepage</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('https://media.istockphoto.com/id/1348169049/photo/dark-street-asphalt-abstract-dark-blue-background.webp?b=1&s=170667a&w=0&k=20&c=IYrzRv-UWEZVfxlZW6JZndqJKzmg83aFMVxNkoQ4bfk='); /* Replace 'your-background-image.jpg' with the path to your image */
      background-size: cover;
      background-position: center;
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 100vh;
    }

    header {
      background-color: light-grey;
      opacity: 1.1;
      padding: 10px;
      text-align: center;
      width: 100%;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-bottom: 150px;
    }

    .search-container {
      opacity: 0.8;
      background-color: #ffffff;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      padding: 20px;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: space-around;
      text-align: center;
      margin-bottom: 20px;
      transition: opacity 0.4s ease;
    }
    .search-container:hover {
      opacity: 0.9; /* Adjust the opacity when hovering, if desired */
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-size: 14px;
      color: #555;
    }

    select {
      flex: 1;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      background-color: #398147;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }
    header h1 {
      color: #398147; /* Change this to your desired text color (e.g., red) */
      padding-top: 25px;

    }

    button:hover {
      background-color: #2077b3;
    }

    .result-container {
      opacity: 0.9;
      width: 400px;
      background-color: #ffffff;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      transition: opacity 0.4s ease;
    }
    .result-container:hover {
      opacity: 1.1; /* Adjust the opacity when hovering, if desired */
    }

    .text-custom {
      color: #398147 !important;
    }
    .go-back-button {
      margin-top: 20px;
      background-color: #398147;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    .go-back-button:hover {
      background-color: #2077b3;
    }
    
  </style>
</head>
<body>

<header>
    <h1>Movie Reviews</h1>
  </header>


  <section class="vh-100">
    <div class="container py-5 h-500 ">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col ">
          <div class="card" style="border-radius: 2rem; background-color: rgba(255, 255, 255, 0.8);">
            <div class="row g-0"></div>
            <div class="card-body p-10 p-lg-5 text-black ">
            
          
<p style="color: #398147"><b>Write a review for your favourite movie</b></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <form method="post" action="">
    <div class="search-container">
      <label for="review"  style="color: #398147">Select Movie Title:</label>
      <select id="review" name="review">

      <option value="" disabled selected hidden>Select Movie</option>
      <option value="1">The Pursuit of Happiness</option>
      <option value="2">The Prestige</option>
      <option value="3">Oppenheimer</option>
      <option value="4">Ford v/s Ferrari</option>
      <option value="5">Inception</option>
      <option value="6">The Dark Knight</option>
      <option value="7">Top Gun:Maverick</option>
      <option value="8">The Shawshank Redemption</option>
      <option value="9">Interstellar</option>
      <option value="10">Wrath of Man</option>
      <option value="11">Bahubali:The Beginning</option>
      <option value="12">Bahubali:The Conclusion</option>
      <option value="13">Pokiri</option>
      <option value="14">Athadu</option>
      <option value="15">Pushpa:The Rise - Part 1</option>
      <option value="16">RRR</option>
      <option value="17">Goodachari</option>
      <option value="18">Gentlemen</option>
      <option value="19">Jathi Ratnalu</option>
      <option value="20">Keedaa Cola</option>
      <option value="21">Kirik Party</option>
      <option value="22">K.G.F: Chapter 1</option>
      <option value="23">K.G.F: Chapter 2</option>
      <option value="24">Kantara</option>
      <option value="25">Raajakumara</option>
      <option value="26">12TH Fail</option>
      <option value="27">3 idiots</option>
      <option value="28">Dhoom 3</option>
      <option value="29">Bajrangi Bhaijaan</option>
      <option value="30">Chennai Express</option>
      <option value="31">Vikram</option>
      <option value="32">Jai Bhim</option>
      <option value="33">Enthiran</option>
      <option value="34">Velaiyilla Pattathari</option>
      <option value="35">Soorari Pottru</option>
      <option value="36">Kannum Kannum Kollaiyadithaal</option>
      <option value="37">Drishyam</option>
      <option value="38">Lucifer</option>
      <option value="39">Kaathal-The Core</option>
      <option value="40">Premam</option>
        <!-- Add options dynamically based on your movie data -->
        <!-- ... (existing options) ... -->
      </select>

      <label for="review-text"  style="color: #398147">Enter Review:</label>
      <textarea id="review-text" name="review-text" rows="4" cols="50" required></textarea>

      <label for="rating"  style="color: #398147" >Enter Rating:</label>
      <input type="number" id="rating" name="rating" min="0" max="10" step="0.1" required>

      <input type="submit" value="Submit Review" name="submit-review"   style="color: #398147">
    </div>
  </form>



  <?php
    $connection = mysqli_connect("localhost:3306", "root", "", "movie_database");

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['submit-review'])) {
        $selectedMovieTitle = mysqli_real_escape_string($connection, $_POST['review']);
        $reviewText = mysqli_real_escape_string($connection, $_POST['review-text']);
        $rating = mysqli_real_escape_string($connection, $_POST['rating']);

        if (!empty($selectedMovieTitle) && !empty($reviewText) && !empty($rating)) {
            $query = "INSERT INTO movie_review (movieid, reviewtext, rating) VALUES ('$selectedMovieTitle', '$reviewText', '$rating')";
            $result = mysqli_query($connection, $query);

            if ($result) {
                echo '<p style="color: white">Review submitted successfully!</p>';
            } else {
                echo '<p >Error in query: ' . mysqli_error($connection) . '</p>';
            }
        } else {
            echo '<p>Please fill in all fields before submitting the review.</p>';
        }
    }

    mysqli_close($connection);
  ?>



  <!-- Go back button -->
  <button class="go-back-button" onclick="window.location.href = 'Act_Dir_Gen_Lan.php'">Back to Home</button>


  <div style="margin-top: 20px;"></div>
  
  <form method="post" action="">
  <div class="search-container">
    <label for="review" style="color: #398147">Select Movie Title:</label>
    <select id="review" name="review">
      <!-- Add options dynamically based on your movie data -->
      <option value="" disabled selected hidden>Select Movie</option>
      <option value="1">The Pursuit of Happiness</option>
      <option value="2">The Prestige</option>
      <option value="3">Oppenheimer</option>
      <option value="4">Ford v/s Ferrari</option>
      <option value="5">Inception</option>
      <option value="6">The Dark Knight</option>
      <option value="7">Top Gun:Maverick</option>
      <option value="8">The Sawshank Redemption</option>
      <option value="9">Interstellar</option>
      <option value="10">Wrath of Man</option>
      <option value="11">Bahubali:The Beginning</option>
      <option value="12">Bahubali:The Conclusion</option>
      <option value="13">Pokiri</option>
      <option value="14">Athadu</option>
      <option value="15">Pushpa:The Rise - Part 1</option>
      <option value="16">RRR</option>
      <option value="17">Goodachari</option>
      <option value="18">Gentlemen</option>
      <option value="19">Jathi Ratnalu</option>
      <option value="20">Keedaa Cola</option>
      <option value="21">Kirik Party</option>
      <option value="22">K.G.F: Chapter 1</option>
      <option value="23">K.G.F: Chapter 2</option>
      <option value="24">Kantara</option>
      <option value="25">Raajakumara</option>
      <option value="26">12TH Fail</option>
      <option value="27">3 idiots</option>
      <option value="28">Dhoom 3</option>
      <option value="29">Bajrangi Bhaijaan</option>
      <option value="30">Chennai Express</option>
      <option value="31">Vikram</option>
      <option value="32">Jai Bhim</option>
      <option value="33">Enthiran</option>
      <option value="34">Velaiyilla Pattathari</option>
      <option value="35">Soorari Pottru</option>
      <option value="36">Kannum Kannum Kollaiyadithaal</option>
      <option value="37">Drishyam</option>
      <option value="38">Lucifer</option>
      <option value="39">Kaathal-The Core</option>
      <option value="40">Premam</option>

      <!-- Add more movie title options -->
    </select>

    <input type="submit" value="Submit" name="searching" required  style="color: #398147">
  </div>

  <center>
 <center> 
  <?php
$connection = mysqli_connect("localhost:3306", "root", "", "movie_database");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['searching'])) {
    $selectedMovieTitle = mysqli_real_escape_string($connection, $_POST['review']);

    if (!empty($selectedMovieTitle)) {
        // Assuming movieid is a numeric value associated with the selected movie title
        $query = "SELECT reviewid, reviewtext, rating FROM movie_review WHERE movieid = '$selectedMovieTitle'";
        $result = mysqli_query($connection, $query);

        echo '<div class="result-container">';
        echo '<h2  style="color: #398147">Movie Reviews</h2>';
        echo '<p style="color: #398147" >--------------------------------------------------</p>';

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    // Display review information
                    echo '<div class="review-info">';
                    echo '<p>Review: ' . $row['reviewid'] . '</p>';
                    echo '<p>Review Description: ' . $row['reviewtext'] . '</p>';
                    echo '<p>Rating: ' . $row['rating'] . '</p>';
                    echo '<p style="color: #398147">--------------------------------------------------</p>';
                    // Add more information as needed
                    echo '</div>';
                }
            } else {
                echo '<p>No reviews found for the selected movie.</p>';
            }
        } else {
            echo '<p>Error in query: ' . mysqli_error($connection) . '</p>';
        }

        echo '</div>';
    }
}

mysqli_close($connection);
?>
</center>

  <script>
    // Function to perform movie search based on title
    function searchMovies() {
      const selectedTitle = document.getElementById('title').value;

      // Placeholder: Display results in the result container
      const resultContainer = document.querySelector('.result-container');
      resultContainer.innerHTML = `
        <h2>Search Results</h2>
        <p>Selected Movie Title: ${selectedTitle}</p>
        <!-- Add similar lines for displaying other selected values -->
      `;
    }
    

  function goBack() {
    // Redirect or navigate to the homepage URL
    window.location.href = 'Act_Dir_Gen_Lan.php';
  }

  </script>
</body>
</html>
