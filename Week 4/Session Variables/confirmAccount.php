<? session_start(); ?>
<? echo "Your account is $_POST[txtaccount]";
$_SESSION['accountNumber'] = $_POST[txtaccount]; ?>
<form action="confirmDeposit.php" method="post">
<input type="text" name="txtdeposit" />
<input type="submit" />
</form>