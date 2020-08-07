<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";

CloseCon($conn);

?>
 </body>
</html>