<?php

echo '<html>';

echo '<h1>PHP Hello world</h1>';

echo 'Here is a link to <a href="http://www.bls.gov">www.bls.gov</a>';

$jobs = array('teacher', 'carpenter', 'web developer');
echo "<p>Here are some jobs:</p><ul>";
foreach ($jobs as $job) {
	echo "<li>" . $job . "</li>";
}

echo '</ul>';
echo '</html>';


?>