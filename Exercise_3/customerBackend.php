<style><?php include 'style.css'; ?></style>
<?php
  $username = $_POST["username"];
  $password = $_POST["password"];
  $quant_can = $_POST["cannoli_amt"];
  $quant_cook = $_POST["cookie_amt"];
  $quant_cake = $_POST["cake_amt"];
  $shipping_sel = $_POST["shipping"];
  $sub_tot_can = 2 * $quant_can;
  $sub_tot_cook = 1 * $quant_cook;
  $sub_tot_cake = 3 * $quant_cake;
  $shp_cost = 0;
  if ($shipping_sel == "Overnight") {
    $shp_cost = 50;
  }
  else if ($shipping_sel == "Three Day") {
    $shp_cost = 5;
  }
  $total_cost = $sub_tot_can+$sub_tot_cook+$sub_tot_cake+$shp_cost;
  echo "<body class='purchase'>";
  echo "<h1 class='title'>Thank you for your purchase, ".$username.". In case you forgot, your password was ".$password.".</h1>";
  echo "<p>Here is your recipt:</p>";
  echo "<div class='purchase'>";
  echo "<table class='center' border='1'>";
    echo "<tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
    echo "<tr><th>Cannoli(s)</th><td>".$quant_can."</td><td>$2.00</td><td>$".$sub_tot_can."</td></tr>";
    echo "<tr><th>Cookie(s)</th><td>".$quant_cook."</td><td>$1.00</td><td>$".$sub_tot_cook."</td></tr>";
    echo "<tr><th>Cake Slice(s)</th><td>".$quant_cake."</td><td>$3.00</td><td>$".$sub_tot_cake."</td></tr>";
    echo "<tr><th>Shipping</th><td colspan='2'>".$shipping_sel."</td><td>$".$shp_cost."</td></tr>";
    echo "<tr><th colspan='3'>Total Cost</th><td>$".$total_cost."</td></tr>";
  echo "</table>";
  echo "</div>";
  echo "</body>";
?>
