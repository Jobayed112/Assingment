<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calculator</title>
    <style>
        body {

            text-align: center;
            font-size: 30px;
        }

        #container {
            background-color: aquamarine;

        }

        input {
            font-size: 18px;

        }

        option {
            font-size: 19px;
        }

        button {
            font-size: 19px;
        }
    </style>
</head>

<body>
    <div id="container">
        <div class="header" id="header">
            <header>
                <h1>MY Calcolator</h1>
            </header>
        </div>
        <br>
        <div id="wrapper_row">
            <form action="" method="post">
                <label for="num1">Enter Your Number:</label>
                <input type="number" name="num1" placeholder="Enter Your Number"><br><br>
                <label for="num2">Enter Your Number</label>
                <input type="number" name="num2" id="" placeholder="Enter Your Number"><br>
                <br>
                <div id="operation">
                    <select name="operation" id="">
                        <option value="">Select</option>
                        <option value="+">addition</option>
                        <option value="-">subtraction</option>
                        <option value="*">multiplication</option>
                        <option value="/">division</option>
                    </select>

                </div><br>
                <div id="button">
                    <button type="submit">Calculate</button>
                </div>
            </form><br>
            <div id="Result">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $operation = $_POST["operation"];
                    switch ($operation) {
                        case "-":
                            $Result = $num1 - $num2;
                            echo "Result IS: $Result";
                            break;
                        case "+";
                            $Result = $num1 + $num2;
                            echo "Result Is: $Result";
                            break;
                        case "*":
                            $Result = $num1 * $num2;
                            echo "Result Is: $Result";
                            break;
                        case "/":
                            $Result = $num1 / $num2;
                            echo "Result Is: $Result";
                            break;
                        default:
                            echo "Not a number of My calculator";
                            break;
                    }
                }
                ?>
            </div>
        </div>
        <div><h1>Thank Calculate
        </h1></div>
    </div>
</body>

</html>