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
      opacity: 1.1;
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
      width: 150px;
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
      padding-top:25px;
     
      opacity: 2.0;
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

    .navbar {
      opacity: 1.1;
      background-color: black;
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
  <h1>About the Actor</h1>
</header>


<section class="vh-100">
    <div class="container py-5 h-500 ">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col ">
          <div class="card" style="border-radius: 2rem; background-color: rgba(255, 255, 255, 0.8);">
            <div class="row g-0"></div>
            <div class="card-body p-10 p-lg-5 text-black ">
            <p><h3><b style="color: #398147;">About the Actor</b></h3></p>
              <p>
              Embark on a journey through the lives and careers of some of the most illustrious actors in the world of cinema. Immerse yourself in the rich tapestry of their performances, each a brushstroke contributing to the masterpiece of global storytelling. From seasoned veterans to emerging talents, our Actor Profiles showcase the diversity and artistry that define the magic of the silver screen.

Explore the nuanced characters, the raw emotions, and the transformative abilities of these actors as they bring stories to life. Whether it's the magnetic presence of a Hollywood icon or the depth of expression in a rising star, our Actor Profiles invite you to witness the artistry that transcends language and resonates across cultures.

Join us for an unparalleled exploration of thespian excellence. Lights, camera, discover the compelling narratives and extraordinary talents that shape the world of cinema. It's more than entertainment; it's a celebration of the craft, the passion, and the indelible mark actors leave on the hearts of audiences worldwide.

Welcome to Actor Profiles – where the spotlight is on the artists who make every frame unforgettable. </p>
<p style="color: #398147;"><b>Select to know more about your favourite actor</b></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<form method="post" action="">
<div class="search-container">
  <div>
    <label for="actor" style="color: #398147"><h6>Select Actor:</h6></label>
    <select id="actor" name="actor">
      <!-- Add options dynamically based on your actor data -->
      <option value="" disabled selected hidden>Select Actor</option>
        <option value="201">Will Smith</option>
        <option value="202">Hugh Jackman</option>
        <option value="203">Christian Bale</option>
        <option value="204">Cillian Murphy</option>
        <option value="205">Matt Damon</option>
        <option value="206">Leonardo Dicaprio</option>
        <option value="207">Tom Cruise</option>
        <option value="208">Tim Robbins</option>
        <option value="209">Matthew McConaughhey</option>
        <option value="211">Prabhas Raju</option>
        <option value="210">Jason Statham</option>
        <option value="212">Mahesh Babu</option>
        <option value="213">Allu Arjun</option>
        <option value="214">NTR Jr.</option>
        <option value="215">Adivi Sesh</option>
        <option value="216">Jai Nani</option>
        <option value="217">Naveen Polishetty</option>
        <option value="218">Tharun Bhascker</option>
        <option value="219">Rakshit Shetty</option>
        <option value="220">Yash Gowda</option>
        <option value="221">Rishab Shetty</option>
        <option value="222">Puneeth Rajkumar</option>
        <option value="223">Vikrant Massey</option>
        <option value="224">Aamir Khan</option>
        <option value="225">Salman Khan</option>
        <option value="226">Shah Rukh Khan</option>
        <option value="227">Dulquer Salman</option>
        <option value="228">Mohanlal Nair</option>
        <option value="229">Mammootty Ismail</option>
        <option value="230">Nivin Pauly</option>
        <option value="231">Kamal Haasan</option>
        <option value="232">Suriya Sivakumar</option>
        <option value="233">Dhanush Raja</option>
        <option value="234">Rajinikanth Gaikwad</option>
      <!-- Add more actor options -->
    </select>
  </div>




  

  <!-- Add similar div blocks for director, genre, and language selection -->

  <input type="submit" value="Submit" name="searching" required style="color: #398147">
</div>
</form>


<div>
  
</div>


<?php
$connection = mysqli_connect("localhost:3306", "root", "", "movie_database");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['searching'])) {
    $selectedActorID = $_POST['actor'];

    if (!empty($selectedActorID)) {
        $query = "CALL GetActorDetails(?)";
        $stmt = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($stmt, "i", $selectedActorID);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        echo '<div class="result-container">';
        echo '<h2 style="color: #398147">Actor Information</h2>';
        echo '<p style="color: #398147">--------------------------------------------------------</p>';

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);

                // Display actor information
                echo '<div class="actor-info">';
                echo '<h3 style="color: #398147"> ' . $row['name'] . '</h3>';
                echo '<p>Date of Birth: ' . $row['dateofbirth'] . '</p>';
                echo '<p>Gender: ' . $row['gender'] . '</p>';
                echo '<p>NoteWorthy: ' . $row['noteworthy'] . '</p>';

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
    const selectedActor = document.getElementById('actor').value;
    // Add similar lines for retrieving other selected values (director, genre, language)

    // Placeholder: Display results in the result container
    const resultContainer = document.querySelector('.result-container');
    resultContainer.innerHTML = `
      <h2>Search Results</h2>
      <p>Selected Actor: ${selectedActor}</p>
      <!-- Add similar lines for displaying other selected values -->
    `;
  }

  // Function to go back to the homepage
  function goBack() {
    // Redirect or navigate to the homepage URL
    window.location.href = 'Act_Dir_Gen_Lan.php';
  }
</script>
</body>
</html>
