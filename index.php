<!DOCTYPEhtml>
<html>
<head>
</head>
<body>

<?php

    $i = "4";

if ($i = "1") {
    echo "no products available";
} else {
    if ($i = "2") {
        echo "specs are available";
    } elseif ($i = "3") {
        echo "mugs are available";
    } elseif ($i = "4") {
        echo "specs and sausage rolls are available";
    }
}

?>

</body>
</html>
