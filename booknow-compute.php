<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title> </title>
    <link rel="stylesheet" type="text/css" href="" />
  </head>

  <body>
    <?php
		$pillow = $_POST['pillow'];
		$fan = $_POST['fan'];
		$soap = $_POST['soap'];
		$towel = $_POST['towel'];
		$blanket = $_POST['blanket'];
		$itemArray = array();
		$orderCtr = 0;

		echo "Additional Services";
		echo "<br/><br/>";
		
		if(empty($_POST['pillow'])){
			echo "";
		}
		else{
			$pillow = $pillow * 10;
			echo "Pillow";
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			echo "<b>₱</b>&nbsp<b>$pillow</b>";
			echo "<br/>";
		}
		if(empty($_POST['fan'])){
			echo "";
		}
		else{
			$fan = $fan * 20;
			echo "Fan";
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
			echo "<b>₱</b>&nbsp<b>$fan</b>";
			echo "<br/>";
		}
		if(empty($_POST['soap'])){
			echo "";
		}
		else{
			$soap = $soap * 30;
			echo "Soap";
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			echo "<b>₱</b>&nbsp<b>$soap</b>";
			echo "<br/>";
		}
		if(empty($_POST['towel'])){
			echo "";
		}
		else{
			$towel = $towel * 40;
			echo "Towel";
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			echo "<b>₱</b>&nbsp<b>$towel</b>";
			echo "<br/>";
		}
		if(empty($_POST['blanket'])){
			echo "";
		}
		else{
			$blanket = $blanket * 50;
			echo "Blanket";
			echo "&nbsp&nbsp&nbsp";
			echo "<b>₱</b>&nbsp<b>$blanket</b>";
			echo "<br/>";
		}
	?>

    <?php
		$total = ((int)$pillow + (int)$fan + (int)$soap + (int)$towel + (int)$blanket);
		echo "<br/>Total:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>₱</b>&nbsp<b>$total</b>";
	?>

    <table border="1" cellpadding="20" style="border-collapse:collapse">
      <?php
			$pillow = $_POST['pillow'];
			$fan = $_POST['fan'];
			$soap = $_POST['soap'];
			$towel = $_POST['towel'];
			$blanket = $_POST['blanket'];
			$itemArray = array();
			$orderCtr = 0;
			$pillowCount = 0;
			$pillowPrice = 0;
		?>
      <thead>
        <tr>
          <th colspan="2">Additional Services</th>
          <th colspan="2">Price</th>
          <th colspan="2">Qty</th>
          <th colspan="2"></th>
        </tr>
      </thead>

      <body>
        <tr>
          <td colspan="2">
            <?php
						if(empty($_POST['pillow'])){
							echo "";
						}
						else{
							echo "Pillow";
							echo "<br/>";
						}
						if(empty($_POST['fan'])){
							echo "";
						}
						else{
							echo "Fan";
							echo "<br/>";
						}
						if(empty($_POST['soap'])){
							echo "";
						}
						else{
							echo "Soap";
							echo "<br/>";
						}
						if(empty($_POST['towel'])){
							echo "";
						}
						else{
							echo "Towel";
							echo "<br/>";
						}
						if(empty($_POST['blanket'])){
							echo "";
						}
						else{
							echo "Blanket";
							echo "<br/>";
						}
					?>
          </td>

          <td rowspan="3">
            <?php
						if(empty($_POST['pillow'])){
							echo "";
						}
						else{
							$pillow = 10;
							echo "₱&nbsp$pillow";
							echo "<br/>";
						}
						if(empty($_POST['fan'])){
							echo "";
						}
						else{
							$fan = 20;
							echo "₱&nbsp$fan";
							echo "<br/>";
						}
						if(empty($_POST['soap'])){
							echo "";
						}
						else{
							$soap = 30;
							echo "₱&nbsp$soap";
							echo "<br/>";
						}
						if(empty($_POST['towel'])){
							echo "";
						}
						else{
							$towel = 40;
							echo "₱&nbsp$towel";
							echo "<br/>";
						}
						if(empty($_POST['blanket'])){
							echo "";
						}
						else{
							$blanket = 50;
							echo "₱&nbsp$blanket";
							echo "<br/>";
						}
					?>
          </td>

          <td colspan="2">
            <?php
						if(empty($_POST['pillow'])){
							echo "";
						}
						else if ($_POST['pillow'] >= 0){
							$pillowCount = $_POST['pillow'];
							$pillowPrice = 10 * $pillowCount;
							$itemArray[] = "(pillowCount) $pillowPrice";
							$orderCtr += 0;
						}
					?>
          </td>
        </tr>
      </body>
    </table>


  </body>

</html>
