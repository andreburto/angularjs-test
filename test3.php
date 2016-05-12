<?php

// My parser
include_once("lib/tag-finder.php");

// Variables
$yvonne_url = "http://pics.mytrapster.com/yvonne.php";
$html_resp = "";
$html_doc = "";
$html_dsp = "";

// Fetch the html
try {
    $html_resp = file_get_contents($yvonne_url);
    $html_doc = parseHtml($html_resp);
    $html_dsp = sprintf('{"url":"%s","thumb":"%s"}',
                        $html_doc[0]['ATTR'][0]['val'],
                        $html_doc[1]['ATTR'][0]['val']);
} catch (Exception $ex) {
    $html_dsp = $ex->getMessage();
}

// Output
header("Content-type: text/plain");
echo($html_dsp);

?>