<!DOCTYPEhtml>
<html>
<head>
</head>
<body>

<?php

$provisionedactivity = array("specs ", "mugs ", "sausage-rolls");
$provisionedactivity [2] = "hugs";
unset($provisionedactivity[3]);

foreach ($provisionedactivity as $x) {
    print "$x";
}


?>

</body>
</html>
