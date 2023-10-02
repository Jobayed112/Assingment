<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempreture</title>
    <meta name="" content="JR Jobayed Rana">
    <style>
        <?php include "Temperature_convert.css" ?>
    </style>
</head>
<body>
<!-- Task 2: Temperature Converter
 -->
    <div id="container">
        <header id="header">
            <h1>Your Tempreture</h1>
        </header><br><br>
        <div id="wrapper">
            <form action="" method="post">
                <label for="">Enter Your Number:</label><br><br>
                <input type="text" placeholder="Number Here" name="num" id=""><br><br>
                <button name=btn1 type="submit">Celsis</button><br><br>
                <button name=btn2 type="submit">Fahrenheit</button><br><br>
            </form>
        </div>
        <div id="result">
            <?php
            // fahrenheit to celcius
            if(isset($_POST['btn1'])){
                $fahrenheit=$_POST["num"];
                echo " Your Fahrenheit Is: $fahrenheit";
                echo "<br>";
                echo "Convert";
                $celsius=(($fahrenheit)-32)*(5/9);
                echo "<br>";
                echo "Celsius Is: $celsius";
           }

        //    celsius to fahrenheit
            if (isset($_POST["btn2"])) {
                $celsius = $_POST["num"];
                echo " Your Celsius Is: $celsius";
                echo "<br>";
                echo "Convert";
                $fahrenheit = ($celsius * 9/5) +32;
                echo "<br>";
                echo " Fahrenheit Is:  $fahrenheit";

                    # code...
            }

?>
        </div>
    </div>
    
</body>
</html>