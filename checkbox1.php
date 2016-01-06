<?php

$json_input = json_decode(file_get_contents('php://input'), true);

$var = array('checked'  =>  (isset($json_input['checked'])?$json_input['checked']:'No'),
             'thetime'  =>  date("Y-m-d H:i:s"));

$json_output = json_encode($var);

header("Content-type: text/plain");

echo($json_output)

?>