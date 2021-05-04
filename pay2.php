<?php
$item=$_POST['item'];
$price=$_POST['price'];
$quant=$_POST['quant'];
echo $item."<br>";
echo $price."<br>";
echo $quant;
?>

<html>
<head>
<title>Pay through PayPal: www.TestAccount.com</title>
</head>
 <body onLoad="document.forms['paypalForm'].submit();">
<form name="paypalForm" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
 <input type="hidden" name="cmd" value="_xclick" />
 <input type="hidden" name="business" value="sb-43osll5453234@business.example.com" />
 <input type="hidden" name="password" value="L9M4RBRBC68ZQGZP" />
 <input type="hidden" name="custom" value="1123" />
 <input type="hidden" name="item_name" value="<?php $item ?>" />
 <input type="hidden" name="amount" value="<?php $price ?>"/>
 <input type="hidden" name="rm" value="<?php $quant ?>" />
 <input type="hidden" name="return" value="success.php" />
 <input type="hidden" name="cancel_return" value="cancel.php" />
 <input type="hidden" name="cert_id" value="AV5SYxgcq3S6MfKCSowKqyIc4SXOAEKRQqvyyG7-CnNvQRoJy6UP.w9c" />
</form>
</body>
</html>