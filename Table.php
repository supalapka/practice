<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
</head>
<body>
    

<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
<?php


for ($row = 1; $row <= 10; $row++) {
  echo "<tr>";
    for ($col = 1; $col <= 10; $col++) {
        $sum = $row * $col;
     echo "<td>$sum</td>";
    }
}
?>
</table>
</border>
</body>
</html>