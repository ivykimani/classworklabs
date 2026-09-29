<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator</title>
        <!-- This calls the calculator's intended styling. -->
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <body>
        <!-- This is the main calculator container. -->
        <div class="calculator">
            <h1>Calculator</h1>
            <!-- This is where the expression and result appear. -->
            <input type="text" id="display">
            <!-- Here are the calculator buttons. -->
            <div class="buttons">
                <!-- This is the button for number 1. The other number buttons work the same way. -->
                <button onclick="appendToDisplay('1')">1</button>
                <button onclick="appendToDisplay('2')">2</button>
                <button onclick="appendToDisplay('3')">3</button>
                <button onclick="appendToDisplay('+')">+</button>
                <button onclick="appendToDisplay('4')">4</button>
                <button onclick="appendToDisplay('5')">5</button>
                <button onclick="appendToDisplay('6')">6</button>
                <button onclick="appendToDisplay('-')">-</button>
                <button onclick="appendToDisplay('7')">7</button>
                <button onclick="appendToDisplay('8')">8</button>
                <button onclick="appendToDisplay('9')">9</button>             
                <button onclick="appendToDisplay('*')">*</button>
                <button onclick="appendToDisplay('0')">0</button> 
                <button onclick="appendToDisplay('/')">/</button>                  
                <button onclick="appendToDisplay('.')">.</button>   
                <!-- This is the button to calculate the result. -->
                <button onclick="calculateResult()">=</button>
                <!-- This is the button to clear the display. -->
                <button onclick="clearDisplay()">C</button>
            </div>
        </div>
        <!-- This includes the JavaScript file for calculator functionality. -->
        <script src="../js/calculator.js"></script>
    </body>
</html>

<!--
    This is the PHP calculator page.
    It contains the HTML structure for a simple calculator.
    The calculator has buttons for numbers 0-9, basic arithmetic operations (+, -, *, /),
    a decimal point, an equals button to calculate the result, and a clear button to reset the display.
    Clicking 7, for example, calls appendToDisplay('7') and displays the number 7 in the input field.
    The other number and operator buttons work in the same way.
    The logic is handled in the external JavaScript file "calculator.js", which contains the functions
    appendToDisplay(), calculateResult(), and clearDisplay() to manage the calculator's behavior.
-->