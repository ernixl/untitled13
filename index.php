<!DOCTYPEhtml>
<html>
<head>
</head>
<body>

<?php

$mugs = "mugs are available";
$saus = "sausage rolls are available";
$specs = "specs are available";

$d = 0;
for ($i = 0, $j = 1; $d <= 28; $i++, $j++) {
    $d = $i + $j;
    if ($d % 2 == 0) {
        print "It's even";
    }
}

?>

</body>
</html>
