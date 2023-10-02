<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
</head>
<body>
    <div id="container">
        <h1>Weather Report</h1>
        <form action="" method="post">
            <input type="number" name="num1" placeholder="Enter Your Weather"><br><br>
            <input type="submit"  name="submit" value="cheak">
        </form>
        <div id="result">
            <?php
            if(isset($_POST['submit'])) {
                    $num1 = $_POST["num1"];
                    if ($num1>=33 && $num1<=45) {
                        echo "It's Warm";
                        # code...
                    }elseif ($num1>=20 && $num1<=32) {
                        echo "It's Cool";
                        # code...
                    }elseif ($num1>=0 && $num1<=20) {
                        echo "It's freezing!";
                        # code...
                    }else{
                        echo "Today Not a Weather: ";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>