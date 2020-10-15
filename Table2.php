<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
</head>
<body>
    

<table width="420px" cellspacing="0px" cellpadding="3px" border="2px" >
<?php


for ($row = 1; $row <= 6; $row++) {
  echo "<tr>";
    for ($col = 1; $col <= 5; $col++) {
        $sum = $row * $col;
     echo "<td>$row * $col = $sum</td>";
    }
}
?>
</table>
</border>
</body>
</html>