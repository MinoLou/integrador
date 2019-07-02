<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Registro</title>
  </head>
  <body>
<form action="formnacion.php" method="post">
  <p>
    nacionalidad:
    <select name="nac">
      <option>Argentino</option>
      <option selected>Uruguayo</option>
      <option>Brasileño</option>
	  <option>Paraguayo</option>
	  <option>Chileno</option>
	  <option>Pakistaní</option>
    </select>
    <input type="submit" value="Submit form">
    <input type="reset" value="Reset form">
  </p>
</form>
</body>
</html>