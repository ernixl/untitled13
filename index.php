<!DOCTYPEhtml>
<html>
<head>
</head>
<body>

<?php

$mugs = "mugs are available";
$saus = "sausage rolls are available";
$specs = "specs are available";

for ($d = 1; $d <= 30; $d++)
    if ($d % 4 == 0) {
        print "<p>on the " . $d . " of this month sausage rolls are available</p>";
    } elseif ($d % 3 != 0) {
        print "<p>on the " . $d . " of this month mugs are available</p>";
    } else print "on the " . $d . " of this month specs are available";

?>

</body>
</html>
