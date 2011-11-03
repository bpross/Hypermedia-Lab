<html>
<link rel="stylesheet" type="test/css" href="main.css"/>
<?php
$numbers = array();
$squares = array();

$counter = 1;

while($counter <= 21){
    $numbers[$counter] = $counter;
    $squares[$counter] = $counter * $counter;
    $counter++;
}

$counter = 1;
echo '<table>';
while($counter <= 21) {
    echo '<tr>';
    echo '<td><p id="number">'.$numbers[$counter].'</p></td>';
    echo '<td><p id="square">'.$squares[$counter].'</p></td>';
    echo '</tr>';
    $counter++;
}
echo '</table>';
?>
</html>
