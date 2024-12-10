<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Include Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie Database Homepage</title>
  <style>
    /* Your existing styles... */
    body {
      height:100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('https://media.istockphoto.com/id/1348169049/photo/dark-street-asphalt-abstract-dark-blue-background.webp?b=1&s=170667a&w=0&k=20&c=IYrzRv-UWEZVfxlZW6JZndqJKzmg83aFMVxNkoQ4bfk=');       background-size: cover;
      background-position: center;
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;

    }

    
    
    header {
      
      opacity: 1.1;
      text-align: center;
      width: 100%;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-bottom: 10px;
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
      
      transition: opacity 0.4s ease;
      width:1100px;
    }
    .search-container:hover {
  opacity: 1.1; /* Adjust the opacity when hovering, if desired */
 
}

    label {
      display: block;
      margin-bottom: 10px;
      font-size: 14px;
      color: #555;
    }

    select {
      width:150px;
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
      background-color:black;
      opacity:2.0;
     
      
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
      position: relative;
      margin-top:50px;
    }
    .result-container:hover {
  opacity: 1.1; /* Adjust the opacity when hovering, if desired */
    }

    .text-custom {
      color: #398147 !important;
    }

    .navbar{
        opacity: 1.1;
        background-color:black;
    }
  </style>
</head>
<body>

  <header>
    <nav class="navbar navbar-light bg-light-gray opacity-0.5">
      <!-- Your existing navbar code... -->
      <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="Act_Dir_Gen_Lan.php">Home</a>
    <a class="navbar-brand mb-0 h1 text-custom" href="actor.php">About Actor</a>
    <a class="navbar-brand mb-0 h1 text-custom" href="director.php">About Director</a>
    <a class="navbar-brand mb-0 h1 text-custom" href="movie_review.php">Review</a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="#"></a>
    <a class="navbar-brand mb-0 h1 text-custom" href="signup_page.php">Sign Up</a>
    <a class="navbar-brand mb-0 h1 text-custom" href="login.php">Login</a>
    <a class="navbar-brand mb-0 h1 text-custom" href="login.php">Log out</a>


    </nav>
  </header>

  <section class="vh-100">
    <div class="container py-5 h-500 ">
      <div class="row d-flex justify-content-center align-items-center h-200">
        <div class="col ">
          <div class="card" style="border-radius: 2rem; background-color: rgba(255, 255, 255, 0.8);">
            <div class="row g-0"></div>
            <div class="card-body p-10 p-lg-5 text-black ">
              <center><h2>
              <b style="color: #398147;">MOVIE DATABASE</b></h2></center>
              <p><b  style="color: #398147;">About the Website</b><p>
              <p>
                Welcome to Movie Database! Your Gateway to Cinematic Excellence. Explore a diverse array of movies in various languages and genres. Immerse yourself in captivating narratives, top-notch performances, and the magic of global cinema. Join us for an unparalleled movie-watching experience. Lights, camera, Action!
              </p>
              <p><b style="color: #398147;">About the Actor</b></p><p>
              Embark on a captivating exploration of thespian brilliance with our Actor Profiles. Discover the lives and careers of renowned actors, from Hollywood icons to emerging stars. Our profiles offer a glimpse into the diverse array of performances, styles, and characters that define global cinema. Witness the artistry that transcends language, as actors bring stories to life with raw emotion, captivating narratives, and transformative abilities. Join us for an unparalleled journey through the world of acting, where each profile tells a unique story, leaving an indelible mark on the history of film.
</p><p>
<b style="color: #398147;">About the Director</b></p>
<p>Explore the cinematic realm with our Director Profiles, delving into the creative minds shaping narratives and defining storytelling through film. From iconic directors to emerging talents, our profiles showcase diverse styles and techniques, illustrating the magic of storytelling. Immerse yourself in visual symphonies as directors bring scripts to life with creativity and precision. Join us for a journey through directorial excellence, where each profile is a testament to the power of visual storytelling in cinema.
</p>
  <p><b style="color: #398147;">Add a Review to your Favourite Movie</b></p>
  <p>Each rating given by the user can update the overall user rating for a particular movie which is displayed when a movie is selected. </p>



</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <form method="POST">
    <div class="search-container">
      <!-- Your existing search form... -->
      <div>
      <label for="actor" style="color: #398147">Select Actor:</label>
      <select name="actor" id1="actor">
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

    <div>
      <label for="director"  style="color: #398147">Select Director:</label>
      <select name="director" id2="director">
        <!-- Add options dynamically based on your director data -->
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
        



        <!-- Add more director options -->
      </select>
    </div>

    <div>
      <label for="genre"  style="color: #398147">Select Genre:</label>
      <select name="genre" id3="genre">
        <!-- Add options dynamically based on your genre data -->
        <option value="" disabled selected hidden>Select Genre</option>
        <option value="7701">Action</option>
        <option value="7702">Adventure</option>
        <option value="7703">Animation</option>
        <option value="7704">Biography</option>
        <option value="7705">Comedy</option>
        <option value="7706">Crime</option>
        <option value="7707">Documentary</option>
        <option value="7708">Drama</option>
        <option value="7709">Family</option>
        <option value="7710">Fantasy</option>
        <option value="7711">History</option>
        <option value="7712">Horror</option>
        <option value="7713">Musical</option>
        <option value="7714">Mystery</option>
        <option value="7715">Romance</option>
        <option value="7716">Sci-Fi</option>
        <option value="7717">Short</option>
        <option value="7718">Sport</option>
        <option value="7719">Thriller</option>
        <option value="7720">War</option>
        <!-- Add more genre options -->
      </select>
    </div>

    <div>
      <label for="language"  style="color: #398147">Select Language:</label>
      <select name="language" id4="language">
        <!-- Add options dynamically based on your language data -->
        <option value="" disabled selected hidden >Select Language</option>
        <option value="8801">English</option>
        <option value="8802">Telugu</option>
        <option value="8803">Kannada</option>
        <option value="8804">Hindi</option>
        <option value="8805">Tamil</option>
        <option value="8806">Malayalam</option>
        <option value="8807">Bengali</option>
        <option value="8808">Marathi</option>
        <option value="8809">Gujarati</option>
        <option value="8810">Urdu</option>
        <option value="8811">Punjabi</option>
        

        <!-- Add more language options -->
      </select>
    </div>
      <input type="submit" name="searching" style="color: #398147">
    </div>
  </form>

  <?php
$connection = mysqli_connect("localhost:3306", "root", "", "movie_database");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['searching'])) {
    $id1 = isset($_POST['actor']) ? mysqli_real_escape_string($connection, $_POST['actor']) : null;
    $id2 = isset($_POST['director']) ? mysqli_real_escape_string($connection, $_POST['director']) : null;
    $id3 = isset($_POST['genre']) ? mysqli_real_escape_string($connection, $_POST['genre']) : null;
    $id4 = isset($_POST['language']) ? mysqli_real_escape_string($connection, $_POST['language']) : null;

    $query = "SELECT * FROM movie WHERE ";
    $conditions = array();

    if ($id1 !== null) {
        $conditions[] = "actorid = $id1";
    }
    if ($id2 !== null) {
        $conditions[] = "directorid = $id2";
    }
    if ($id3 !== null) {
        $conditions[] = "genreid = $id3";
    }
    if ($id4 !== null) {
        $conditions[] = "languageid = $id4";
    }

    $query .= implode(" AND ", $conditions);

    $result = mysqli_query($connection, $query);

    echo '<div class="result-container">';
    echo '<h2 style="color: #398147">Search Results</h2>';
    echo '<p style="color: #398147">--------------------------------------------------------</p>';

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                // Display results
                echo '<div class="movie-result">';
                echo '<h3 style="color: #398147"> ' . $row['title'] . '</h3>';
                echo '<p>Release Date: ' . $row['releasedate'] . '</p>';
                echo '<p>Duration: ' . $row['duration'] . '</p>';
                echo '<p>Rating: ' . $row['rating'] . '</p>';
                echo '<p>Description: ' . $row['description'] . '</p>';
                echo '<p>Average User Rating: ' .$row['average_rating'] . '</p>';
                echo '<p style="color: #398147">----------------------------------------------------</p>';

                // Add more information as needed
                echo '</div>';
            }
        } else {
            echo '<p>No results found.</p>';
        }
    } else {
        echo '<p>Error in query: ' . mysqli_error($connection) . '</p>';
    }

    echo '</div>';
}

mysqli_close($connection);
?>

</body>
</html>