<!DOCTYPE html>
<html>
<head>
	<title>Narcissistic Number</title>
</head>
<body>

	<form action="" method="post">
		
		<input type="text" name="inputnumber">

		<button type="submit" name="submit">Submit</button>
	</form>

</body>
</html>


<?php 
 
	if(isset($_POST["submit"])) {
		$output = (narcissistic($_POST["inputnumber"]));
		if ($output == 1) {
	    	echo "true"; 
		}
		else {
	    	echo "false";
		}
	}

	function narcissistic($number){ 
    $sum = 0;   
    $x = $number;   
	    while($x != 0)   
	    {   
	        $rem = $x % 10;   
	        $sum = $sum + $rem*$rem*$rem;   
	        $x = $x / 10;   
	    }   
	      
	    // if true then armstrong number 
	    if ($number == $sum) 
	        return 1; 
	      
	    // not an armstrong number     
	    return 0;     
	}


	

 ?>