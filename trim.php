<?php
$str = "    Hello World!          ";
echo "Without ltrim: " . $str;
echo "<br>";
echo "With ltrim: " . ltrim($str);
echo "<br>";
echo "With rtrim: " . rtrim($str);
echo "<br>";
echo "With trim: " . trim($str);

?>