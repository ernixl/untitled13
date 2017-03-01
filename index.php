<!DOCTYPEhtml>
<html>
<head>
</head>
<body>

<?php

$age = "22";
if ($age >= "16" and $age <= "18") {
    print "specs, ";
} else {
    if ($age >= "18" and $age <= "21") {
        print "specs and mugs";
    } else if ($age > "21") {
        print "specs, mugs and sausage rolls.";
    }
}

echo "<p>completed finally";
?>

</body>
</html>
