<?php
    $file = fopen("./contacts.txt","r");
    $str="";
    while(! feof($file))
    {
        $str .= "|" . fgets($file);
    }

    fclose($file);
    echo $str;
?>