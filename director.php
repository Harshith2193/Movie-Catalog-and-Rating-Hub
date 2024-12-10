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
      background-image: url('https://media.istockphoto.com/id/1348169049/photo/dark-street-asphalt-abstract-dark-blue-background.webp?b=1&s=170667a&w=0&k=20&c=IYrzRv-UWEZVfxlZW6JZndqJKzmg83aFMVxNkoQ4bfk=');
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
      padding: 10px;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: space-around;
      text-align: center;
      margin-bottom: 20px;
      transition: opacity 0.4s ease;
    }

    .search-container:hover {
      opacity: 0.9;
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
      color: #398147;
      padding-top:15px;
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
      opacity: 1.1;
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
  <h1>Director</h1>
</header>


<section class="vh-100">
    <div class="container py-5 h-500 ">
      <div class="row d-flex justify-content-center align-items-center h-200">
        <div class="col ">
          <div class="card" style="border-radius: 2rem; background-color: rgba(255, 255, 255, 0.8);">
            <div class="row g-0"></div>
            <div class="card-body p-10 p-lg-5 text-black ">
            <p><h3><b style="color: #398147;">About the Director</b></h3></p>
              <p>
              Step behind the lens and into the visionary world of directors who shape the landscape of storytelling through the art of filmmaking. Director Profiles invites you to explore the diverse styles, innovative techniques, and captivating narratives crafted by the maestros of cinema.

Dive into the directorial journeys that have defined eras and genres, from the iconic to the avant-garde. Immerse yourself in the magic of storytelling as these directors orchestrate visual symphonies, bringing scripts to life with creativity and precision. Whether it's the bold storytelling of a seasoned auteur or the fresh perspective of an emerging talent, our profiles showcase the brilliance that defines the cinematic experience.

Join us for an unparalleled exploration of directorial excellence. Lights, camera, discover the compelling narratives, unique perspectives, and transformative influence directors wield in the world of cinema. It's more than just movies; it's an immersive journey guided by the visionaries who shape our cinematic experiences.

Welcome to Director Profiles – where the spotlight is on the creative minds who turn scripts into cinematic masterpieces, leaving an indelible mark on the history of filmmaking.   </p>
<p style="color: #398147;"><b>Select to know more about your favourite director</b></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



<form method="post" action="">
<div class="search-container">
  <label for="director"  style="color: #398147"><h6>About director:</h6></label>
  <select id="director" name="director">
    <!-- Add options dynamically based on your movie data -->
    <option value="" disabled selected hidden>Select Director</option>
    <option value="301">Gabriele Muccino</option>
        <option value="302">Christopher Nolan</option>
        <option value="303">Joseph Kosinski</option>
        <option value="304">James Mangold</option>
        <option value="305">Frank Darabont</option>
        <option value="306">Guy Ritchie</option>
        <option value="307">S. s. Rajamouli</option>
        <option value="308">Puri Jagannadh</option>
        <option value="309">Trivikram Srinivas</option>
        <option value="310">Sukumar</option>
        <option value="311">Sashi Kiran Tikka</option>
        <option value="312">Mohan Krishna Indraganti</option>
        <option value="313">Anudeep K. V.</option>
        <option value="314">Tharun Bhascker</option>
        <option value="315">Rishab Shetty</option>
        <option value="316">Prashanth Neel</option>
        <option value="317">Aditya Baskaran</option>
        <option value="318">Santhosh Ananddram</option>
        <option value="319">Vidhu Vinod Chopra</option>
        <option value="320">Rajkumar Hirani</option>
        <option value="321">Vijay Krishna Acharya</option>
        <option value="322">Kabir Khan</option>
        <option value="323">Rohit Shetty</option>
        <option value="324">Lokesh Kanagaraj</option>
        <option value="325">T. J. Gnanvel</option>
        <option value="326">S. Shankar</option>
        <option value="327">Velraj</option>
        <option value="328">Sudha Kongara</option>
        <option value="329">Desingh Periyasamy</option>
        <option value="330">Jeethu Joseph</option>
        <option value="331">Prithviraj Sukumaran</option>
        <option value="332">Alphonse Puthren</option>


    <!-- Add more movie title options -->
  </select>

  <input type="submit" value="Submit" name="searching" required  style="color: #398147">
</div>
  </form>



<?php
$connection = mysqli_connect("localhost:3306", "root", "", "movie_database");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['searching'])) {
    $selectedDirectorID =  $_POST['director'];

    if (!empty($selectedDirectorID)) {
        $query = "CALL GetDirectorDetails($selectedDirectorID);";
        $result = mysqli_query($connection, $query);

        echo '<div class="result-container">';
        echo '<h2 style="color: #398147">Director Information</h2>';
        echo '<p style="color: #398147">--------------------------------------------------------</p>';

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);

                // Display actor information
                echo '<div class="director-info">';
                echo '<h3 style="color: #398147">' . $row['name'] . '</h3>';
                echo '<p>Date of Birth: ' . $row['dateofbirth'] . '</p>';
                echo '<p>Gender: ' . $row['gender'] . '</p>';
                echo '<p>NoteWorthy: ' . $row['noteworthy'] . '</p>';
                echo '<p style="color: #398147">--------------------------------------------------------</p>';

                // Add more information as needed
                echo '</div>';
            } else {
                echo '<p>No results found.</p>';
            }
        } else {
            echo '<p>Error in query: ' . mysqli_error($connection) . '</p>';
        }

        echo '</div>';
    }
}

mysqli_close($connection);
?>




<!-- Go back button -->
<button class="go-back-button" onclick="goBack()">Back to Home</button>


<script>
  // Placeholder function for displaying search results
  function searchMovies() {
    const selectedTitle = document.getElementById('title').value;

    // Placeholder: Display results in the result container
    const resultContainer = document.querySelector('.result-container');
    resultContainer.innerHTML = `
      <h2>Search Results</h2>
      <p>About Director: ${selectedTitle}</p>
      <!-- Add more information as needed -->
    `;
  }

  function goBack() {
    // Redirect or navigate to the homepage URL
    window.location.href = 'Act_Dir_Gen_Lan.php';
  }
</script>
</body>
</html>
