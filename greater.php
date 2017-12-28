<!DOCTYPE html>
<html>
<head>
	<title>Gratest no</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
<div class="container">
<h2>Greatest no of 3</h2>
<form action="#" name="calculater" class="myform" method="post">
	<span class="no"> Number 1 :</span><input type="text" name="no1" class="input"><br>
	<span class="no"> Number 2 :</span><input type="text" name="no2" class="input"><br>
    <span class="no"> Number 3 :</span><input type="text" name="no3" class="input"><br>

    <input type="submit" name="submit" value="SUBMIT"><br>

    
    <?php 
    $no1 = $_POST['no1'];
    $no2 = $_POST['no2'];
    $no3 = $_POST['no3'];

    if ($no1 >= $no2 AND $no1 >= $no3) {
        echo "The Greates no is ".$no1;
    }


    else if ($no2 >= $no1 AND $no2 >= $no3) {
        echo "The Greates no is ".$no2;
    }


    else if ($no3 >= $no1 AND $no3 >= $no2) {
        echo "The Greates no is ".$no3;
    }

    else
    {
        echo "Please enter numbers";
    }

    ?>

    </div>
    </div>

</form>
</div>
</body>
</html>