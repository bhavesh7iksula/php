<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Number 1 : <input type="text" name="n1"><br>
  Number 2 : <input type="text" name="n2"><br>
  Number 3 : <input type="text" name="n3"><br>
  Number 4 : <input type="text" name="n4">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field

    $numb = $_REQUEST;
  
    if (empty($numb)) {
        echo "Number is empty";
    } else {

    	echo "Max is".max($numb);
    	echo "<br>";
    	echo "Min".min($numb);
    	echo "<br>";

    $c = count($numb);

    $sum = array_sum($numb);
       
    $avg = $sum/$c;

    echo "Average is".$avg;
    	
      
    }
}
	
?>

</body>
</html>





