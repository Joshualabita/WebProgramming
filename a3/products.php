<!DOCTYPE html>

<?php
  session_start();
  include_once("tools.php");
  topModule('Products');








$products = [
  'p1' => [
    'id' => 'p1',
    'item' => 'Angel',
    'img' => 'angel_tn.jpg',
    'description' => "Our Angel cake includes the ingredients of: Sugar, flour, egg whites, cream of tartar. The rich aromas of this cake are too blissful to resist. Perfect for all occasions the Angel cake comes in round or square options depending on your mood. if you're a sweet tooth, this is the one for you!",
    'price' => '20.99',
    'style1' => 'Round',
    'style2' => 'Square',
  ],
  'p2' => [
    'id' => 'p2',
    'item' => 'Pound',
    'img' => 'pound_tn.jpg',
    'description' => 'This is our Pound cake, it includes the ingredients of: Sugar, flour, eggs. The pound cake is a traditional cake suited to all taste buds! Our variatons come in either round or square.',
    'price' => '25.99',
    'style1' => 'Round',
    'style2' => 'Square',
  ],
  'p3' => [
    'id' => 'p3',
    'item' => 'Layer',
    'img' => 'layer_tn.jpg',
    'description' => 'Our Layer cake is the perfectly formulated little secret. Due to the special ingredients to our recipe, please email us if there are any allergy concerns as we do not openly disclose the ingredients. This delicious cake describes itself. Comes in round or square.',
    'price' => '32.99',
    'style1' => 'round',
    'style2' => 'square',
    
  ]
]

?>


    <main>
      <div id='Items' >
      <?php

      if (isset($_GET['id']) && (array_key_exists($_GET['id'], $products))) {

        $product = $products[$_GET['id']];

    //    $oid = $product;





        echo "    <div id='productimg'>
              <!-- image sourced under creative commons, and used for educational purposes https://unsplash.com/photos/X63FTIZFbZo -->
              <img src='$product[img]'>
            </div>

            <div id='descriptioncontainer'>
              <div id='description'>
                <p id='textinfo'>$product[description] </p>
              </div>
              <div id='productdetails'>
                <p id='textinfo'> Price: $$product[price] </p>

                <form method='post' action='cart.php' >
                <input type='hidden' id='price' name='price' value='$product[price]'>
                  <input type='hidden' name='id' value='$product[id]'>
                  <input type='hidden' name='item' value='$product[item]'>
                    <p id='textinfo'> Style:
                    <select name='oid' >
                       <option value='$product[style1]'> $product[style1] </option>
                        <option value='$product[style2]'> $product[style2] </option>
                        
                      </select>
                    </p>

                    <p id='textinfo'> Subtotal: </p> <p id='subtotal' >$$product[price] <p>
                  <p id='textinfo'> Quantity:  </p>
                  <div class='value_button' id='decrease' onclick='decreaseValue()' value='Decrease Value'>  -</div>
                  <input type='number' id='qty' name='qty' value='1' min='1'>
                  <div class='value_button' id='increase' onclick='increaseValue()' value='Increase Value'>+</div>

                  <button > Add To Cart  </button>

                  </form>



              </div>
            </div>";

      } else {
 
        foreach($products as $pid => $product) {
          echo "<div class='imgDescriptions'>
          <img class='item_img' src='$product[img]'>

                <p class='text_centre' id='textinfo'>$product[item]
                <br>  <a href='products.php?id=$product[id]'> More info </a> </br> </p>

              </div>";

        }
      }





      ?>
      </div>
      <div id='space'>
      </div>
    </main>

    <footer>
      <?php
        bottomModule();
      ?>

  </body>
</html>

<?php include('/home/eh1/e54061/public_html/wp/debug.php'); ?>
