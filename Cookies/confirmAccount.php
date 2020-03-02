<?php $cookieName ='accountNumber';
setcookie($cookieName, $_POST["txtaccount"]);
 echo "Your account is $_POST[txtaccount]"; ?>
<form action="confirmDeposit.php" method="post">
<input type="text" name="txtdeposit" />
<input type="submit" />
</form>