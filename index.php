<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Цыганюк</title>
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>
    <?php
    $num1 = 0;
    $num2 = 0;
    $znak = "+";
    $result = "нет_результата";
    if(isset($_GET['Number1'])&& isset($_GET['Number2']))
    {
        $num1 = $_GET['Number1'];
        $num2 = $_GET['Number2'];
        $znak = $_GET['znak'];
        if(is_numeric($num1) && is_numeric($num2)){
            if($znak == "+")
                $result = $num1 +$num2;
            else
                $result = "нет_результата";
        }
    }
    ?>
    <div>
        <h3>Калькулятор</h3>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <input type="text" name="Number1" <?php echo "value=" . $num1 ?> >
            <select name="znak">
                <option value="+" <?php if($znak == "+") ?> > + </option>
            </select>
            <input type="text" name="Number2" <?php echo "value=" . $num2 ?>>
            <input type="submit" value=" = ">
            <input type="text" name="result" <?php echo "value=" . $result?>>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>
</html>