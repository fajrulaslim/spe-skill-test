<!DOCTYPE html>
<html>
<head>
  <title>Parity Outler</title>
</head>
<body>

  <form action="" method="post">
    
    <textarea name="inputnumber"></textarea>
    <p>ex: 2, 4, 0, 100, 4, 11, 2602, 36</p>

    <button type="submit" name="submit">Submit</button>
  </form>

</body>
</html>


<?php 

if(isset($_POST["submit"])) {
  $output = (find($_POST["inputnumber"]));
   echo $output; 
}

function find($integers) {
  $arr_integers = explode (", ",$integers);

  $l = count($arr_integers);
  $a = 0;
  $even;
  $odd;
  for($i=0;$i<$l;$i++){
    if(($arr_integers[$i]%2)==0){
      $even = $arr_integers[$i];
      $a++;
    }
    else{
      $odd = $arr_integers[$i];
    }
  }
  if($a==1)
    return $even;
    else
      return $odd;
  }

 ?>