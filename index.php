<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pascal's Triangle</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

<div class="container">
    <h1>Pascal's Triangle Generator</h1>

    <form id="triangleForm" method="post">
        <label for="rowNumber">Enter Row Number: </label>
        <input type="number" id="rowNumber" name="rowNumber"  required>
        <br><br>
        <input type="submit" value="Generate Triangle">
    </form>

    <div class="triangle" id="triangleOutput">
        <?php
        function factorial($num) {
            $factorial = 1;
            for ($i = 1; $i <= $num; $i++) {
                $factorial *= $i;
            }
            return $factorial;
        }

        function pascal($row) {
            for ($i = 0; $i <= $row; $i++) {
                for ($j = 0; $j <= $i; $j++) {
                    echo factorial($i) / (factorial($j) * factorial($i - $j)) . " ";
                }
                echo "<br>";
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $rowNumber = intval($_POST['rowNumber']);
            if ($rowNumber >= 1 ) {
                echo "<div class='row'><strong>Pascal's Triangle for row $rowNumber:</strong></div>";
                pascal($rowNumber - 1); // Since the Pascal triangle starts from row 0
            } else {
                echo "Please enter a number greater than 0";
            }
        }
        ?>
    </div>
    <button class="reset-button" onclick="clearOutput()">Reset</button>
</div>




        <script src="script.js"></script>

    </body>
</html>
