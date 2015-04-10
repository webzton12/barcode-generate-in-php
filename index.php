<?php

require_once 'Image/Barcode.php';
   /* Data that will be encoded in the bar code */
   $bar_code_data = "HelloWorld";
 
   /* The third parameter can accept any from the following,
    * jpg, png and gif.
    */
   Image_Barcode::draw($bar_code_data, 'code128', 'png');
?>
