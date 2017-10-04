<?php
$json = file_get_contents('http://services.faa.gov/airport/status/iad?format=application/json');
echo "<h3>Raw JSON</h3>";
echo $json;
$obj = json_decode($json, TRUE);
echo "<h3>Decoded as a PHP array</h3>";
echo "<pre>";
print_r($obj);
echo "</pre>";
echo "<h3>Extract parts</h3>";
echo "<p>IATA = " . $obj['IATA'];
echo "<p>delay = ". $obj['delay'];
echo "<p>reason = ". $obj['status']['reason'];
?>