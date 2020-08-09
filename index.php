<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php 

  if (isset($_GET['error'])) 
  {

    echo "error";
  }

  if (isset($_GET['success']))

  {

    echo "success";
  }


 ?>

 <form action="main.php" method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="subject" placeholder="Subject" required>
    <input type="text" name="msg" placeholder="Massege" required>
    <input type="submit" name="submit" >
 </form>
</body>
</html>