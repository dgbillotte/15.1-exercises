<?php 
// lower strictness of error reporting
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);

// declare and initialize variables
$op_name = '';
$op_symbol = '';
$num1 = '';
$num2 = '';
$message = '';

// if there are inputs, compute result and create message
if($_GET['op']) {
    $op_name = $_GET['op'];
    $num1 = $_GET['n1'];
    $num2 = $_GET['n2'];

    // compute result and determine operator symbol
    if($op_name == 'add') {
        $op_symbol = '+';
        $result = $num1 + $num2;

    } elseif($op_name == 'sub') {
        $op_symbol = '-';
        $result = $num1 - $num2;

    } elseif($op_name == 'mult') {
        $op_symbol = '*';
        $result = $num1 * $num2;

    } elseif($op_name == 'div') {
        $op_symbol = '/';
        $result = $num1 / $num2;

    } elseif($op_name == 'mod') {
        $op_symbol = '%';
        $result = $num1 % $num2;

    } elseif($op_name == 'pow') {
        $op_symbol = '^';
        $result = pow($num1, $num2);

    } elseif($op_name == 'sin') {
        $op_symbol = 'sine';
        $result = sin($num1); 
    } elseif($op_name == 'cos') {
        $op_symbol = 'cosine';
        $result = cos($num1);
    }

    // create result message
    $symbol_length = strlen($op_symbol);
    if($symbol_length === 1) {
        $message = "$num1 $op_symbol $num2 = $result";
    } elseif($symbol_length > 1) {
        $message = "$op_symbol($num1) = $result";
    } else {
        $message = "unknown operator: $op_name";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calc Tool</title>
</head>
<body>
    <h2>Calc Inputs</h2>
    <form action="">
        <div>Num1 <input type="text" name="n1"></div>
        <div>Num2 <input type="text" name="n2"></div>
        <div>
            <select name="op">
                <option>add</option>        
                <option>sub</option>        
                <option>mult</option>        
                <option>div</option>        
                <option>mod</option>        
                <option>pow</option>        
                <option>sin</option>        
                <option>cos</option>        
            </select>
        </div>
        <button>Calculate Now!!!</button>
    </form>

    <h2>Answer for Previous Calculation</h2>
    <p><?php echo $message ?></p>
</body>
</html>