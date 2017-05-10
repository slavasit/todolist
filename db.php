<?php
//connect to Database
$db = new Mysqli;
$db-> connect('localhost', 'root', '' , 'crud');

//Check database connection
if ($db){
    echo "success";
}

?>