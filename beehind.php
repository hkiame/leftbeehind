<?php
$handle = fopen('1.in', 'r');
while($line = fgets($handle)){
    list($x, $y) = explode(' ', $line);

    if(!ctype_digit(trim($x)) || !ctype_digit(trim($y)) || (int)$x < 0 || (int)$y > 1000){
    	continue;
    }
    if((int)$x == 0 && (int)$y == 0){
    	continue;
    }

    if(((int)$x + (int)$y) == 13){
    	echo "Never speak again.\r\n";
    	continue;
    }

    if((int)$x > (int)$y){
    	echo "To the convention.\r\n";
    }

    if((int)$x < (int)$y){
    	echo "Left beehind.\r\n";
    }

    if((int)$x == (int)$y){
    	echo "Undecided.\r\n";
    }
}