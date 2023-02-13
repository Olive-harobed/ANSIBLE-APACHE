<!DOCTYPE html>
<html>
 
<body>
 
  <h1>Hello Olive </h1>
  <?php
date_default_timezone_set ("Africa/Lagos");
echo $date = date('m/d/Y h:i:s a', time()) .  date_default_timezone_get();
?>

</body>
</html>
