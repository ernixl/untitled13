<!DOCTYPEhtml>
<html>
<head>
</head>
<body>

<?php

$mugs = "mugs are available";
$saus = "sausage rolls are available";
$specs = "specs are available";

for ($d = 1; $d <=30; $d ++)
    if ($d % 2 == 0) {
        print "<p>$d.It's even even</p>";
    }elseif($d % 2 != 0) {print "<p>$d.it is odd</p>";}

?>

</body>
</html>
