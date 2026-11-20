<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lab 7a Q3</title>
</head>
<body>
  <?php 
    function calculateArea($length, $width) {
    return $length * $width; 
  }?>
  <p>Area of rectangle with length 5 and width 10 is <?php echo calculateArea(5, 10); ?></p>
</body>
</html>