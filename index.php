<!DOCTYPEhtml>
<html>
<head>
</head>
<body>

<?php

$wantedgoods = "specs";

switch ($wantedgoods) {
    case specs:
        echo "You have to be above 16 to buy specs";
        break;
    case mugs:
        echo "You have to be above 18 to buy mugs";
        break;
    case sausagerolls:
        echo "You have to be above 21 to buy sausage rolls";
        break;
    default:
        echo "enter your query";
}


?>

</body>
</html>
