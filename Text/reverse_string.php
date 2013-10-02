<?php
/*
 * Project: Reverse a String
 * Date: October 2nd, 2013
 * Author: Nolan Knill
 */

$test = "dsfalhasdfh3esdaf";
$final = "";
for ($i = strlen($test); $i>0; $i--){
  $final.=$test[$i];
}
echo $final;
?>