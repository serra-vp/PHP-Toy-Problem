<style>
	.animation{
		line-height: .6; 
		text-align: center; 
		padding-top: 9%;
		color: red;
		/* animation: fadeinout 1s infinite;
    opacity: 1; */
	}
	/* @keyframes fadeinout {
		0%,100% { opacity: 0; }
		50% { opacity: 1; }
	} */
</style>
<p class="animation">
<?php

$l = 100;
$w = 100;

for($x=1;$x<=$l;$x++){
	echo "*";
	for($y=2;$y<=$w;$y++){	
		//orange #e88d0e
		//yellow #e9f505
		//green #008000
		//blue #0000FF
		//indigo #4b0082
		//violet #7914b8
		if(($l*.14 < $x && $l*.28 >= $x)){
			if((($w*.14) < $y && ($w*.28) > $y)){
				echo "<span style='color: #e88d0e;>*</span>";		
			}else{
				echo "*";
			}
		}else{
			echo "*";
		}

		// if($l*.25 < $x && $l*.75 >= $x){
		// 	if( ($w*.25) < $y && ($w*.75) > $y){
		// 		echo "<span style='color: #7914b8;>*</span>";	
		// 	}else{
		// 		echo "*";	
		// 	}
		// }else{
		// 	echo "*";
		// }
	}
	echo"<br/>";
}
?>
</p>