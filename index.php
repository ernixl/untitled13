<!DOCTYPEhtml>
<html>
<head>
</head>
<body>

<?php

$provisionedactivity = array("specs ", "mugs ", "sausage-rolls");
$provisionedactivity [1] = "hugs";
unset($provisionedactivity[2]);

foreach ($provisionedactivity as $x) {
    print "$x";
}


?>

</body>
</html>
