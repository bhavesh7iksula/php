<!DOCTYPE html>
<html>
<head>
	<title>Calculater</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
<div class="container">
<h2>Calculator</h2>
<form action="#" name="calculater" class="myform" method="post">
	<span class="no"> Number 1 :</span><input type="text" name="no1" class="input"><br>
	<span class="no"> Number 2 :</span><input type="text" name="no2" class="input"><br>



	<div class="dropdown">
  	<button class="dropbtn">Operations to perform</button>
  	<div class="dropdown-content">
    <select name="operatn">
    	<option>Addition</option>
    	<option>Subract</option>
    	<option>Multiply</option>
    	<option>Divide</option>
    	<option>Modulus</option>
    </select>
    
   

  	</div>
	</div>

	<input type="submit" name="submit" value="SUBMIT">

	<?php 
			/*$no1 =  $_POST["no1"];
			$no2 =  $_POST["no2"];
			$operate =  $_POST["operatn"];*/
function calculate($no1,$no2,$operate){
			switch ($operate) {
    case "Addition":
    		$r = $no1 + $no2;
    		return $r;
        break;
    case "Subract":
        $r = $no1 - $no2;
    		return $r;
        break;
    case "Multiply":
        $r = $no1 * $no2;
    		return $r;
        break;
    case "Divide":
        $r = $no1 / $no2;
    		return $r;
        break;
    case "Modulus":
        $r = $no1 % $no2;
    		return $r;
        break;
    default:
        echo "<br>Please select an option!";
	}
}

echo "<br><b>Your final after ",$_POST['operatn'],"is : ",calculate($_POST['no1'],$_POST['no2'],$_POST['operatn'],"</b>");

	  ?>


</form>
</div>
</body>
</html>