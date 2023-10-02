<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade_Calculator</title>
</head>

<body>
    <div id="container">
        <header>
            <h1>Grade Calculator</h1>
        </header>
        <div id="wrapper">
            <form action="" method="post">
    
                <label for="Enter Your Math Result:"><input type="number" name="num2" placeholder="Enter Your Math Result:"></label>
                <br><br>

                <input name="submit" type="submit" value="Result"><br><br>
            </form>

            <div id="english">
                    <?php
                    if (isset($_POST['submit'])) {
                        $num2 = $_POST['num2'];
                        if ($num2 >= 90 && $num2 <= 100) {
                            echo "Your Grade is A+";
                        }elseif ($num2<=89 &&$num2>=80) {
                            echo "Your grade is A";
                            # code...
                        }elseif($num2<=79 && $num2>=70){
                            echo "Your grade is B+";
                        }elseif($num2<=69 && $num2>=60){
                            echo "Your grade is B";
                        }elseif ($num2<=59 && $num2>=50) {
                            echo "Your grade is C";
                            # code...
                        }elseif ($num2<=49 && $num2>=40) {
                            echo "Your grade is D";
                            # code...'
                        }
                        elseif ($num2<=39 && $num2>=33) {
                            echo "your grade is E";
                            # code...
                        }
                        elseif ($num2<=32 && $num2>=null) {
                            echo 'You grade is F';
                            # code...
                        }else{
                            echo "Not A Valid Number ";
                        }
                    }

                    ?>
            </div>


        </div>
    </div>
</body>

</html>