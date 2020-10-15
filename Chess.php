<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
</head>
<body>
    

<table width="270px" cellspacing="0px" cellpadding="0px" style="border:2px solid black;">
<?php


for ($row = 0; $row < 8; $row++) {
  echo "<tr>";
    for ($col = 0; $col < 8; $col++) {
      if(($row + $col)  % 2 != 0)
      echo "<td height=30px width=30px bgcolor=#000000></td>";
      else echo "<td height=30px width=30px bgcolor=#ffffff></td>";
    }
}
?>
</table>
</border>
</body>
</html>