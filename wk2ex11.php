<?php
  $topmodules[0] = "Internet Systems Development";
  $topmodules[5] = "Programming 1";
  $topmodules[10] = "Programming 2";
  $topmodules[30] = "OOAD";
  $topmodules[40] = "Software Engineering";

  while(list($index, $value) = each($topmodules))
  {
    echo "Index is $index  and value is $value <br/>";
  }
?>

<?php
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;

  while(list($index,$value) = each($mymarks))
  {
    echo "For $index my grade was  $value .<br/>";
  }
  echo "<br/> My best year was Year 3 when I averaged ". $mymarks["year 3"];
?>