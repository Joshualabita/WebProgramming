<!DOCTYPE html>

<?php
  session_start();
  include_once("tools.php");
  topModule('Home');
?>
    <style>
      <?php
       
        $here = $_SERVER['SCRIPT_NAME'];
        $bits = explode('/',$here);
        $filename = $bits[count($bits)-1];
        echo "nav a[href$='$filename']";
      ?>

    </style>
  </head>

  <body>


    <main>
      <div id="new" class='centre'>
        <p class="Heading-centre"> Mary's Cakes </p>
          <a href="products.php">
            <hr>
            <img class='centre' id="newrange" src='angel.jpg' />
          </a>
      </div>

      
    </main>

    <footer>
      <?php
        bottomModule();
      ?>

  </body>
</html>
<?php include('/home/eh1/e54061/public_html/wp/debug.php'); ?>
