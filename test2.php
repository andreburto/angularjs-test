<?php

// Variables
$yvonne_url = "http://pics.mytrapster.com/yvonne.php";
$html_resp = "";

// Fetch the html
try {
    $html_resp = file_get_contents($yvonne_url);
} catch (Exception $ex) {
    $html_resp = $ex->getMessage();
}

// Output
header("Content-type: text/html");
echo($html_resp);

?>