<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <!-- he form submits to itself -->
    <form action="calculator.php" method="post">
    First Num: <input type="number" step="any" name="num1" placeholder="enter your number"><br>//step allows decimal numbers
    operation: <input type="textbox" name="operation" placeholder="enter your operation"><br>
    Second Num: <input type="number" step="any" name="num2" placeholder="enter your number"><br>//step allows decimal numbers
    <input type="submit" name="calculate" value="calculate">    
     </form>

  <!-- Using if-else statements for basic arithmetic operations -->
   <?php
   //Wrapping prevents errors when the form is not submitted
   if (isset($_POST['calculate'])) {
   $num1 = $_POST["num1"];
   $num2 = $_POST["num2"];
   $operation = $_POST["operation"];

   if($operation == "+"){
    echo $num1 + $num2;
   }elseif($operation == "-"){
    echo $num1 - $num2;
   }elseif($operation == "*"){
    echo $num1 * $num2;
   }elseif($operation == "/"){
    echo $num1 / $num2;
   } else {
    echo "Invalid Operator";
   }
   }
  ?>

  <br>

  <!-- Using switch-case statements for basic arithmetic operations -->
  <?php
  if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = 0;

    switch ($operation) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: Division by zero";
            }
            break;
            
    }

    echo "<h2>Result: $result</h2>";
  }
  ?>

</body>
</html>




