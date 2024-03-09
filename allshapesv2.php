
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div class="container">
    <h1>BSIT-2A: MENDOZA, MA. CLARRISE R. <BR>MY PHP SHAPES</h1>


<style>

* {
background-color: aqua;
}

h1 {
text-align: center;
}

</style>



<?php

echo '<p style="text-align:center;font-family: Verdana;line-height: 20px;">';

$n=4;

for($i=1;$i<=$n;$i++){
	for($j=1;$j<=(2*$n)-1;$j++){
		if($j>=$n-($i-1) && $j<=$n+($i-1)){
			echo "✶";
		}else{
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
	}
	echo "<br>";
}

for($i=$n-1;$i>=1;$i--){
	for($j=1;$j<=(2*$n)-1;$j++){
		if($j>=$n-($i-1) && $j<=$n+($i-1)){
			echo "✶";
		}else{
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
	}
	echo "<br>";
}

?>

<?php

echo '<p style="text-align:center;font-family: Verdana;line-height: 20px;">';

$num = 5;

for($i=$num/2; $i<=$num; $i+=2)
{
    for($j=1; $j<$num-$i; $j+=2)
    {
        echo "&nbsp;&nbsp;";
    }
    for($j=1; $j<=$i; $j++)
    {
        echo "✶";
    }
    for($j=1; $j<=$num-$i; $j++)
    {
        echo "&nbsp;&nbsp;&nbsp&nbsp;";
    }
    for($j=1; $j<=$i; $j++)
    {
        echo "✶";
    }
    echo "<br>";
}
  
for($i=$num; $i>=1; $i--)
{
    for($j=$i; $j<$num+1; $j++)
    {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    for($j=1; $j<=($i*2)-1; $j++)
    {
        echo "✶";
    }
    echo "<br>";
}
echo "<pre>";
?>

<?php

echo '<p style="text-align:center;font-family: Verdana;line-height: 20px;">';
    $size = 5;
    

    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "&nbsp;";
        }
        for ($k = 0; $k < ($size - $i) * 2 - 1; $k++) {
            echo "✶";
        }
        echo "<br>";
    }

    for ($i = 2; $i <= $size; $i++) {
        for ($j = $size; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 0; $k < $i * 2 - 1; $k++) {
            echo "✶";
        }
        echo "<br>";
    }
?>

<?php

echo '<p style="text-align:center;font-family: Verdana;line-height: 20px;">';
    $size = 5;
    for($i = 0; $i < $size; $i++) {
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        for($j = 0; $j < $size; $j++) {
          echo "✶";
        }
        echo "<br>";
    }


?>

<?php

$n=5;
for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$n;$j++){
		if($j==$i){
			echo " ✶ ";
		}else{
			echo "&nbsp;&nbsp;&nbsp;";
		}
	}
	echo '</br>';
}

?>

<?php
 
echo '<p style="text-align:center;font-family: Verdana;line-height: 20px;">';

$n=5;
for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$n;$j++){
		if($j==$i || $i+$j==$n+1){
			echo " ✶ ";
		}else{
			echo "&nbsp;&nbsp;&nbsp;";
		}
	}
	echo '<br>';
}

?>

<?php

$n=7;
for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$n+3;$j++){
		if($i==1 || $i==$n){
			echo "✶";
		}else{
			if($j==1 || $j==$n+3){
				echo "✶";
			}else{
				echo "&nbsp;&nbsp;&nbsp;";
			}
		}
	}
	echo '<br>';
}

?>


</div>

</body>
</html>