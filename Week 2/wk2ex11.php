<?php
  $mymarks[0] = ["44"] = CO451;
  $mymarks[1] = ["42.5"] = CO452;
  $mymarks[2] = ["48"] = CO453;
  $mymarks[3] = ["40"] = CO455;
  $mymarks[4] = ["50"] = CO456;
  $mymarks[5] = ["85"] = CO457;

$total = 0;
$total = $total + $mymarks[$index];
$average = $total /  6;

  while(list($index, $total) = each($mymarks))
  {
 echo "For $index my grade was $total .<br/>";
 }
 echo "<br/> My best year was Year 3 when I averaged ". $mymarks["CO457 - B M"];

 // for($total = 0; $total = $total + $mymarks[$index]; $average = $total /  6;)
 // {
 //   echo "$total module is $mymarks[$total] <br/>";
 // }	
 // echo "<br/> My best year was Year 3 when I averaged ". $mymarks[$index];

 // <html>
 // <head>
 // <body>
 //     <p> My gross wage is <?php print("$gross");
 // </body>
 //</head>
 // </html>

?>