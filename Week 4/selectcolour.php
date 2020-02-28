<html>
  <head><title>Select colour page</title></head>
    <body>
      <form action="confirmation.php"  method="post">
    <?php echo "<h2> Select the colour for the $_POST[selqty] widgets you are ordering<h2>";
    ?>
   	<select name="selcolour">
   	  <option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>
        </select>
        <br/><br/>	
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>