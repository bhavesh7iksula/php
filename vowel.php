<html>
<body>
    
    
    <form action="" method="post">
        <input type="text" name="string" />
        <input type="submit" />
    </form>
</body>
</html>
 
<?php 
 
    if($_POST)
    {
        //get the input value and convert string to lowercase
        $string = strtolower($_POST['string']);
        //all vowels in array
        $vowels = array('a','e','i','o','u');
        //find length of the string
        $len = strlen($string);
        $num = 0;
        
        //loop through each letter
        for($i=0; $i<$len; $i++){
            if(in_array($string[$i], $vowels))
            {
                
                if($string[$i]=='a'){
                    $a_count++;
                    
                }
                 else if($string[$i]=='e'){
                    $e_count++;
                   
                }
                 else if($string[$i]=='i'){
                    $i_count++;
                }
                 else if($string[$i]=='o'){
                    $o_count++;
                }
                 else if($string[$i]=='u'){
                    $u_count++;
                }

                $num++;
            }
        }
        
         $count = ["a"=>$a_count,"e"=>$e_count,"i"=>$i_count,"o"=>$o_count,"u"=>$u_count,];

         arsort($count);
         foreach ($count as $key => $value) {
             echo "Max Value of ".$key." is " .$value;
             break;
         }
         //print_r($count);

        //output
        echo "<br>Number of vowels : <span style='color:green; font-weight:bold;'>". $num ."</span>";

    }
 
?>