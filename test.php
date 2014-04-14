<?php
$fileUrl = "http://apps.renren.com/showoffer/generate.php?name=xhh&schools=0-1-2";
$array = explode ( '?', basename ( $fileUrl ) );
print_r($array);
echo file_get_contents("http://app.mysach.com/showoffer/generate.php?name=xhh&schools=0-1");
