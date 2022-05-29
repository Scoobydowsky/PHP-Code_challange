<html lang="en">
<head>
    <title>5th Challange from www.codeacademy.com</title>
</head>
<body>
<table>
    <tr>
        <th>Number</th>
        <th>x2</th>
    </tr>
    <?php
    for($i = 1; $i <=12 ; $i++){
        echo "<tr>";
        for ($j = 1 ; $j<=2;$j++){
            echo "<td>".$i *$j."</td>" ;
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
