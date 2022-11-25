<!DOCTYPE html>
<html>
<body>
<?php 
for ($x = 1; $x <= 10; $x++) {
    $b = 5 * $x ;
    echo "5 * " .  $x . "= ". $b. "<br>";
} 
?>

<?php 
for ($x = 2; $x <= 100; $x+=2) {
if ($x == 60){
    continue;
}
echo "The number is: $x <br>";
}
?>




</body>
</html>