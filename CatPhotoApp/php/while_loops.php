<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>While Loops Example</title>
</head>
<body>
 <h1>While Loops Example</h1>
 <hr>
  <?php
  $index = 1;
  while($index <= 5){
    echo "$index <br>";
    $index++;// increment the index by 1 each loop iteration
  }
  //do while loops - same as while loop but order is reversed i.e., the loop will execute at least once before checking the condition
  $index = 1;
  do{
    echo "$index <br>";
      $index++;
  }while($index <= 5);
  ?>

  //infinite loops happen when the condition never becomes false
  // for example:
  // while($index <= 1){ - index is always 1 no matter what hence the infinite loop
  //echo "$index <br>";
  //}

</body>
</html>