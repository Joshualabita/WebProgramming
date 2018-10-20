<!DOCTYPE html>


<?php
  session_start();
  include_once("tools.php");
  topModule('Cart');

?>

  <main>

<?php
echo "  <div id='new' class='centre'>
<p class='Heading-centre'> Contact Details </p> <br>
</div>";


echo "

<div class='centre' id='contact_details'>";



  echo"
<form method='post'>
<p id='textinfo'>
Name: <input type='text' name='name' required> <br>
Email: <input type='text' name='email' required> <br>
Address: <textarea name='address'></textarea> <br>
Mobile Number: <input type='text' name='mobile' required> <br>
Credit Card Number: <input type='text' name='creditcard' required> <br>
Expiry Date: <input type='month' name='expiry' required> <br>
<button> Submit </button>
</form>
</p>
</div>



";



if (!empty($_POST)) {

$name = $_POST['name'];
$date = date("m.d.y");
$email = $_POST['email'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$creditcard = $_POST['creditcard'];
$expiry = $_POST['expiry'];
$date2month = date("Y-m",strtotime('first day of +2 month'));
$error='0';


if (!preg_match("/[a-zA-Z .,'-]$/", $name)){
  $error = $error + 1;


}


if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$error = $error + 1;


}



if (!preg_match("/[a-zA-Z .,'-\/\n]$/", $address)){
  $error = $error + 1;


}


if (!preg_match("/^(04|\(04\)|\+614)?[0-9]{8}?$/", $mobile)){
  $error = $error + 1;


}


if (!preg_match("/^[0-9 ]{12,16}$/", $creditcard)){
  $error = $error + 1;


}


if ($expiry < $date2month){
  $error = $error + 1;


}





if($error == 0){
  foreach($_SESSION['cart'] as $pid => $item) {
      $pid = $item['id'];
      $oid = $item['oid'];
      $qty = $item['qty'];
      $price = $item['price'];
      $totalprice = $item['totalprice'];
  }

  $_SESSION['details']['name'] = $name;
  $_SESSION['details']['email'] = $email;
  $_SESSION['details']['mobile'] = $mobile;
  $_SESSION['details']['address'] = $address;

$order = array_merge($_SESSION['details'], $item);

$fp = fopen("orders.txt", "a");
flock($fp, LOCK_EX);
fputcsv($fp, $order, "\t");

flock($fp, LOCK_UN);

header("Location: receipt.php");
}
else {
  echo "<p id=textinfo> Review your information, $error errors exsist. </p>
  </div>
  <div id='space'>
  </div>";
}



}


?>


  </main>


  <?php
    bottomModule();
  ?>

  </body>

  </html>
  <?php include('/home/eh1/e54061/public_html/wp/debug.php'); ?>
