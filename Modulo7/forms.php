<form action="first.php" method="post">
  <p>Name: <input type="text" name="name" /></p>
  <p>Age: <input type="text" name="age" /></p>
  <p><input type="submit" name="submit" value="Submit" /></p>
</form>
<html> 
<body> 

Welcome <? Php echo  $ _POST [ "nombre"] ; ?> <br /> 
Su edad: <? php? echo  $ _POST [ "edad"] ; ?> 

</ Body> 
</ html>