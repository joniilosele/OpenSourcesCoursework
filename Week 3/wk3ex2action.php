<?php
  if ($_POST["txtage"] < 21)
  {
    echo "You are under 21 years old and you're a $_POST[txtgender]";
  }
  else
  {
    echo "You are 21 years old or over and you're a $_POST[txtgender]";
  }

?>