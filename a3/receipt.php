<!DOCTYPE html>

<html>
<head>
  <link rel="stylesheet" href="css/receipt.css">

</head>
  <main>

<?php
  session_start();
foreach($_SESSION['cart'] as $pid => $product) {
}
$date = date("m.d.y");
echo "<p class='Heading-centre'> Mary's Cakes </p>
<p class='Heading-centre'> Receipt </p>";

$date = date("m.d.y");
$name = $_SESSION['details']['name'];
$email = $_SESSION['details']['email'];
$mobile = $_SESSION['details']['mobile'];
$address = $_SESSION['details']['address'];



$item = $product['item'];
$option = $product['oid'];
$qty = $product['qty'];
$unitprice = $product['price'];
$total = $product['totalprice'];

echo "<div id= 'contact'>
<p class='Heading-centre-small'> Contact Details </h4>
  <p> Name: $name <br>
  Email: $email <br>
  Mobile: $mobile <br>
  Address: $address <br>
  Todays Date: $date
  </p>
</div>

<div id='product'>
<p class='Heading-centre-small'> Product Details </h4>
<p> Product: $item<br>
Option: $option<br>
  Quantity: $qty<br>
  Unit Price: $unitprice<br>
  Total Price: $total</p>
  </div>


  ";
?>



    </main>




    </body>

    </html>
    <?php include('/home/eh1/e54061/public_html/wp/debug.php'); ?>
