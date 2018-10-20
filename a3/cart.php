<!DOCTYPE html>


<?php
  session_start();
  include_once("tools.php");
  topModule('Cart');

  if (isset($_POST['oid'], $_POST['id'], $_POST['qty'], $_POST['price'])) {
    $oid = $_POST['oid'];
    $pid = $_POST['id'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $totalprice = ($_POST['qty'] * $_POST['price']);
    $item = $_POST['item'];
    $id = $_POST['id'];

    if($qty >= 1){
      $itemAdded = 'true';
    }
      $_SESSION['cart'][$id]['id'] = $pid;
      $_SESSION['cart'][$id]['oid'] = $oid;
      $_SESSION['cart'][$id]['qty'] = $qty;
      $_SESSION['cart'][$id]['price'] = $price;
      $_SESSION['cart'][$id]['item'] = $item;
      $_SESSION['cart'][$id]['totalprice'] = $totalprice;





  }
?>

<main>
<?php
echo "  <div id='new' class='centre'>
<p class='Heading-centre'> Shopping Cart </p> <br>
</div>";




foreach($_SESSION as $pid => $item) {
  foreach($item as $pids => $order){


    echo "
    <div class='centre' id='new' ><p class='text_centre' id='textinfo'> Item: $order[item] <br> Option: $order[oid] <br> Quantity: $order[qty] <br> Price: $ $order[price] <br> Total Price: $ $order[totalprice]
    " ;
  }


}
echo" <p class='centre'>
<form method='post' >
<input type='hidden' name='cancel' value='cancel'>
<button> Cancel  </button>
</form>";

if(isset($_POST['cancel'])){
  unset($_SESSION['cart']);
  header("Location: products.php");
};





echo "<a href='checkout.php'><button> Check Out </button> </a></p> </div>";
?>
</main>


<?php
  bottomModule();
?>

</body>

</html>
<?php include('/home/eh1/e54061/public_html/wp/debug.php'); ?>
