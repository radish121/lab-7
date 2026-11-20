<!DOCTYPE html>
<html lang="en">

<head>
  <title>Lab 7a Q1</title>
</head>

<body>
  <?php 
    $name = "Ainaa Nabila"; 
    $matricNum = "CI250081";
    $course = "Software Engineering";
    $yearOfStudy = 3;
    $address = "TUDM Subang";  
  ?>
  <table border="1">
    <tr>
      <td>Name</td>
      <td>
        <?php echo "$name"; ?>
      </td>
    </tr>
    <tr>
      <td>Matric Number</td>
      <td>
        <?php echo "$matricNum"; ?>
      </td>
    </tr>
    <tr>
      <td>Course</td>
      <td>
        <?php echo "$course"; ?>
      </td>
    </tr>
    <tr>
      <td>Year Of Study</td>
      <td>
        <?php echo "$yearOfStudy"; ?>
      </td>
    </tr>
    <tr>
      <td>Address</td>
      <td>
        <?php echo "$address"; ?>
      </td>
    </tr>
  </table>
</body>

</html>