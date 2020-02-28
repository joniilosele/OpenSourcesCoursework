<? $cookieName ='accountNumber';
setcookie($cookieName, $_POST[txtaccount]); ?>
<? echo "Your account is $_POST[txtaccount]"; ?>
var_dump($cookieName);
<form action="confirmDeposit.php" method="post">
<input type="text" name="txtaccount" />
<input type="submit" />
</form>