<?php
include("mysql_connect.inc.php");
if (!empty($_COOKIE['history'])) {
    $history = explode(',', $_COOKIE['history']);
    foreach($history as &$value){
        echo '<li class="list-group-item list-group-item-info">' .$value. '</li>';
    }
} else {
    echo "<li>None result</li>";
}


?>


