<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
</head>
<body>
 <?php
// put your code here
       
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}
$favcolor = "pink";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is pink!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
      ?>
</body>
</html>
