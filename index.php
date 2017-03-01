<!DOCTYPEhtml>
<html>
<head>
</head>
<body>

<?php

$random = rand(5,7,11,13,17,19,23);

for ($d = 1; $d <= 30; $d++)
    if ($d == 1) {
        print "<p>on the " . $d . " of this month no products are available</p>";
    } elseif ($d % 4 == 0) {
        print "<p>on the " . $d . " of this month sausage rolls are available</p>";
    } elseif ($d % 3 == 0) {
        print "<p>on the " . $d . " of this month mugs are available</p>";
    } elseif ($d % 2 == 0) {
        print "on the " . $d . " of this month specs are available";
    } elseif ($d=$random){print "random stock";}

?>

</body>
</html>
