<!DOCTYPE html>
<html>
<body>

<?php

function reversePyramid($len){
	for($i=0;$i<=$len;$i++){
      for($j=$len;$j>=$i;$j--){
          echo "* ";
      }
    	echo "<br>";
    }
}

function pyramid($len){
	for($i=0;$i<=$len;$i++){
    	for($j=0;$j<=$i;$j++){
        	echo "* ";
        }
        echo "<br>";
    }
}

function square($len){
	for($i=0;$i<=$len;$i++){
    	for($j=0;$j<=$len;$j++){
        	echo "* ";
        }
        echo "<br>";
    }
}

function numberPyramid($len){
	for($i=1;$i<=$len;$i++){
    	for($j=1;$j<=$i;$j++){
        	echo $j.' ';
        }
        echo "<br>";
    }
}

function halfDiamond($len){
	for($row=0;$row< 2*$len; $row++){
    	$colInRows = $row > $len ? 2*$len-$row : $row;
    	for($col=0; $col < $colInRows; $col++){
        	echo "* ";
        }
        echo "<br>";
    }
}

function halfNumberDiamond($len){
	for($row=1;$row<= 2*$len; $row++){
    	$colInRows = $row > $len ? 2*$len-$row : $row;
    	for($col=1; $col <= $colInRows; $col++){
        	echo $col." ";
        }
        echo "<br>";
    }
}


function fullDiamond($len){
	for($row=0;$row<=2*$len;$row++){
    
    	$noOfCol = $row > $len ? 2*$len-$row : $row;
        $noOfSpaces = $len - $noOfCol;
        
        for($s=0;$s<= $noOfSpaces;$s++){
        	echo "&nbsp";
        }
        
    	for($col=0;$col<=$noOfCol;$col++){
        	echo "*";
        }
        echo "<br>";
    }
} 

function fullNumberDiamond($len){
	for($row=1;$row<=2*$len;$row++){
    
		$noOfCol= $row > $len ? 2*$len-$row : $row;
    	$noOfspaces = $len - $noOfCol;
        for($s=1;$s<=$noOfspaces;$s++){
        	echo "&nbsp";
        }
        for($col=1;$col<=$noOfCol;$col++){
        	echo $col;
        }
        echo "<br>";
    
    }

}


echo "Pryramid <br><br>";
pyramid(5);
echo "<br> Reverse Pryramid <br><br>";
reversePyramid(5);

echo "<br> Squrare <br><br>";
square(5);

echo "<br> Number Pyramid <br><br>";
numberPyramid(5);

echo "<br> half diamond <br><br>";
halfDiamond(5);

echo "<br> half number diamond <br><br>";
halfNumberDiamond(5);

echo "<br> full diamond <br><br>";
fullDiamond(5);

echo "<br> full diamond <br><br>";
fullNumberDiamond(5);

?> 

</body>
</html>
