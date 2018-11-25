<!DOCTYPE html>
<?php
	include 'php/counter.php';
?>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
  <meta charset="utf-8" /> <!-- HTML5 -->
  <meta http-equiv="content-type" content="text/html; charset=utf-8" /> <!-- HTML 4.x -->
  <meta http-equiv="expires" content="0" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" /> 
  <link rel="stylesheet" type="text/css" href="css/counter.css" />
  <title>Visitor counter</title>
<body>
	<div id="Counter"><b>Visitor: </b><?php echo "".mGetNumberVisitor(); ?></div>
</body>
</html>