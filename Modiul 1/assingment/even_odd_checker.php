<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even_odd_Checker</title>
</head>

<body>
    <div id="container">
        <h1>Even Or Odd Number</h1>
        <form action="" method="post">
            <label for="">Enter Any Number:</label>
            <input type="number" name="num">
            <input type="submit" name="submit">
        
        <div id="result">
            <?php
            if(isset($_POST['submit'])){
                $num=$_POST['num'];
                if(($num%2)==0 && $num!=0){
                    echo "The number $num is Even";
                    }elseif (($num%2)!=0) {
                        echo "The number $num is odd";
                    }elseif ($num==0) {
                        echo "The number $num is ZERO";
                    }

            }
            
?>
        </div>
    </div>
</body>

</html>