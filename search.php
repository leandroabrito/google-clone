<?php 

  if(isset($_GET["term"])) {
    $term = $_GET["term"];
  }
  else {
    exit("You must enter a search term");
  }

  if(isset($_GET["type"])) {
    $type = $_GET["type"];
  }
  else {
    $type = "sites";
  }

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

              <input class="search-box" type="text" name="term" value='<?php echo $term ?>'>
              <button>
                <svg class="search-btn" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="24" height="24" viewBox="0 0 172 172"
                  style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M64.5,14.33333c-27.6214,0 -50.16667,22.54527 -50.16667,50.16667c0,27.6214 22.54527,50.16667 50.16667,50.16667c12.52732,0 23.97256,-4.67249 32.7819,-12.31771l3.05143,3.05143v9.26628l43,43l14.33333,-14.33333l-43,-43h-9.26628l-3.05143,-3.05143c7.64521,-8.80934 12.31771,-20.25458 12.31771,-32.7819c0,-27.6214 -22.54527,-50.16667 -50.16667,-50.16667zM64.5,28.66667c19.87509,0 35.83333,15.95824 35.83333,35.83333c0,19.87509 -15.95825,35.83333 -35.83333,35.83333c-19.87509,0 -35.83333,-15.95825 -35.83333,-35.83333c0,-19.87509 15.95824,-35.83333 35.83333,-35.83333z"></path></g></g>
                </svg>

              </button>

            </div>
          
          </form>

        </div>

      </div>

      <div class="tabs-container">
        <ul class="tab-list">
          <li class="<?php echo $type == 'sites' ? 'active' : '' ?>">
            <a href='<?php echo "search.php?term=$term&type=sites"; ?>'>
              Sites
            </a>
          </li>
          <li class="<?php echo $type == 'images' ? 'active' : '' ?>">
            <a href='<?php echo "search.php?term=$term&type=images"; ?>'>
              Images
            </a>
          </li>
        </ul>
      </div>    
    </div>
    
  </div>
  
  
</body>
</html>