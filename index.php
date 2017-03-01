<!DOCTYPEhtml>
<html>
<head>
</head>
<body>

<?php

$random = rand(1, 30);

for ($d = 1; $d <= 30; $random++)
    if ($random) {
        print "<p>on the " . $d . " of this month no products are available</p>";
    } elseif ($d = $random) {
        print "<p>on the " . $d . " of this month no breas are available</p>";
    }


?>

</body>
</html>
