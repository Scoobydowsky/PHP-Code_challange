<html lang="en">
<head>
    <title>4th Challange from www.codeacademy.com</title>
</head>
<body>
<?php
$currentMonth = date("m");
$season = "";
if ($currentMonth >= 1 && $currentMonth <=2 || $currentMonth == 12){
$season ="Winter";
}elseif($currentMonth >= 3 && $currentMonth <= 5){
    $season ="spring";
}elseif($currentMonth >= 6 && $currentMonth <= 8){
    $season ="summer";
}elseif($currentMonth >= 9 && $currentMonth <= 11){
    $season ="fall";
}
echo "Current season is: {$season}";

?>
</body>
</html>
