<?php

echo "Go!\n";
$y = 1565200;
$z = "";

for ($i = 1; $i <= $y; $i++) {
	echo "I: $i/$y D: " . intval($i / $y * 100) . "% \t \n";
	
    // sleep(0.1);
	echo "\033[?25l"; // hide cursor
    echo "\033[1A";
	
	echo "";
}
echo "\033[1A";
echo "Done!\t\n";