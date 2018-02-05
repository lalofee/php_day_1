<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>php uebungen</title>
</head>
<body>

<?php
if(date('D') == 'Mon') { 
  echo "Happy Monday!";
} elseif(date('D') == 'Tue') {
  echo "Happy Tuesday!";
}
elseif(date('D') == 'Wed') {
  echo "Happy Wednesday!";
}
elseif(date('D') == 'Thu') {
  echo "Happy Thursday!";
}
elseif(date('D') == 'Fri') {
  echo "Happy Friday!";
}
elseif(date('D') == 'Sat') {
  echo "Happy Saturday!";
}
elseif(date('D') == 'Sun') {
  echo "Happy Sunday!";
}
?>

</body>
</html>