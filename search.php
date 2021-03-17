<?php 
  // echo $_GET["term"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Welcome to Doodle</title>
</head>
<body>

  <div class="wrapper">

    <div class="header">


      <div class="header-content">

        <div class="logo-container">
          <a href="index.php">
            <img src="assets/images/festisite_google.png" alt="">
          </a>
        </div>

        <div class="search-container">
          
          <form action="search.php" method="GET">

            <div class="search-bar-container">

              <input class="search-box" type="text" name="term">
              <button>Search</button>

            </div>
          
          </form>

        </div>

      </div>


    </div>

    
  </div>
  
  
</body>
</html>