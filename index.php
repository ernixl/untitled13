<!DOCTYPEhtml>
<html>
<head>
</head>
<body>

<?php

$age = "22";
if ($age >= "16" or $age <= "18") {
    print "specs, ";
} else {
    if ($age >= "18" or $age <= "21") {
        print "mugs, ";
    } else if ($age > "21") {
        print "sausage rolls.";
    }
}


?>

</body>
</html>
