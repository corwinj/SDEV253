<?php
$pictures = array('cat.jpg', 'honeycomb.jpg');

shuffle($pictures);
?>
<!DOCTYPE html>
<html>
<head>
<title>Bob's Auto Parts</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<div align="center">
<table style="width: 100%; border: 0">
<tr>
<?php
for ($i = 0; $i < 3; $i++) {
echo "<td style=\"width: 33%; text-align: center\">
<img src=\"";
echo $pictures[$i];
echo "\"/></td>";
}
?>
</tr>
</table>
</div>
</body>
</html>
