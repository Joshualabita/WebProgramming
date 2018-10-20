<?php
function topModule($pagetitle) {
$html = <<<"OUTPUT"

<!DOCTYPYE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>$pagetitle</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
    <script src='qtySelector.js'> </script>
  </head>

  <body>

    <header>
      <div><img id='logo' class='centre' src='logo.png' /> </div>
      
    </header>

    <nav>
      <div id='nav'>
        <ul>
          <div id="login">
            <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=login' method='post' target='_blank'>
              <li> <input type="email" name="email" placeholder="Username" required>
              <li> <input type="password" name="password" placeholder="Password" required>
              <li> <button> Log In </button>
            </form>
          </div>
              <ul class="main-nav">
        <li><a href="index.php"> HOME </a></li>
        <li><a href="products.php"> PRODUCTS </a></li>
        <li><a href=""> ABOUT </a></li>
      
    </ul>
        </ul>
      </div>
    </nav>

OUTPUT;

  echo $html;
  }

function bottomModule(){
  $html= <<<'OUTPUT'
   <footer>
  <p>© Joshua Labita 2018                    Student Number: S3720417                    By Joshua Labita</p>
 

</footer>
OUTPUT;

echo $html;
}

function this_id_actually_exists() {
  foreach($products as $pid => $product) {
    return $product[0];

  }
}
?>
