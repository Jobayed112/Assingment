<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
</head>
<body>
    <div id="container">
        <h1>Small To Large</h1>
        <form action="" method="post">
            <label for="">Enter Number</label>
            <input type="number" name="num1" placeholder="Enter Your Small Number:"><br><br>
            <label for="">Enter Number:</label>
            <input type="number" name="num2" placeholder="Enter Your Small Number:"><br><br>
            <input type="submit"  name="submit" value="submit">
            <br><br>
</form>
<br>
        <div id="result">
            <?php
            if($_POST['submit']){
                $num1=$_POST['num1'];
                $num2=$_POST['num2'];
                // $submit=$_POST['submit'];
                echo "Your Fast Number Is: $num1";
                echo "<br>";
                echo "<br>";
                echo " Your Second Number Is: $num2";
                echo "<br>";
                echo "<br>";
                $fNumber=$num1>=$num2 ? "The Greate Number Is: $num1 ":"The Grater Number Is: $num2";
                echo "$fNumber";
            }

            ?>

        </div>
    </div>
</body>
</html>