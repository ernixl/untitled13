<!DOCTYPEhtml>
<html>
<head>
</head>
<body>

<?php

$random = rand(1,30);

for ($d = 1; $d <= 30; $d++)
    if ($d == $random) {
        print "<p>on the " . $d . " of this month no products are available</p>";
}elseif ( $d==$random){print "<p>on the " . $d . " of this month no products are available</p>";
    }


?>

</body>
</html>
